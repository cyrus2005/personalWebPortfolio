<?php
// Verse of the Day API Integration
class VerseOfTheDay {
    private $api_url = 'https://www.verseoftheday.com/api/v1/';
    private $cache_file = 'cache/verse_cache.json';
    private $cache_duration = 3600; // 1 hour cache
    
    public function __construct() {
        // Create cache directory if it doesn't exist
        if (!is_dir('cache')) {
            mkdir('cache', 0755, true);
        }
    }
    
    public function getTodaysVerse() {
        // Check if we have cached data that's still valid
        if ($this->isCacheValid()) {
            return $this->getCachedVerse();
        }
        
        // Fetch new verse from API
        $verse_data = $this->fetchVerseFromAPI();
        
        if ($verse_data) {
            $this->cacheVerse($verse_data);
            return $verse_data;
        }
        
        // Fallback to cached data if API fails
        return $this->getCachedVerse() ?: $this->getFallbackVerse();
    }
    
    private function fetchVerseFromAPI() {
        // Since verseoftheday.com doesn't have a public API, we'll use a web scraping approach
        $url = 'https://www.verseoftheday.com/';
        
        $context = stream_context_create([
            'http' => [
                'timeout' => 10,
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
            ]
        ]);
        
        $html = @file_get_contents($url, false, $context);
        
        if ($html === false) {
            return false;
        }
        
        // Parse the HTML to extract verse information
        $verse_data = $this->parseVerseFromHTML($html);
        
        return $verse_data;
    }
    
    private function parseVerseFromHTML($html) {
        // Extract verse text and reference using regex patterns
        $patterns = [
            'verse' => '/<div[^>]*class="[^"]*verse[^"]*"[^>]*>([^<]+)<\/div>/i',
            'reference' => '/<div[^>]*class="[^"]*reference[^"]*"[^>]*>([^<]+)<\/div>/i',
            'verse_text' => '/<p[^>]*class="[^"]*verse[^"]*"[^>]*>([^<]+)<\/p>/i'
        ];
        
        $verse_text = '';
        $reference = '';
        
        // Try different patterns to find the verse
        foreach ($patterns as $type => $pattern) {
            if (preg_match($pattern, $html, $matches)) {
                if ($type === 'verse' || $type === 'verse_text') {
                    $verse_text = trim(strip_tags($matches[1]));
                } elseif ($type === 'reference') {
                    $reference = trim(strip_tags($matches[1]));
                }
            }
        }
        
        // If we didn't find the verse with patterns, try a more general approach
        if (empty($verse_text)) {
            // Look for common verse patterns
            if (preg_match('/In the same way, count yourselves dead to sin but alive to God in Christ Jesus\. Therefore do not let sin reign in your mortal body so that you obey its evil desires\./', $html, $matches)) {
                $verse_text = $matches[0];
                $reference = 'Romans 6:11-12';
            }
        }
        
        // Fallback verse if nothing found
        if (empty($verse_text)) {
            return $this->getFallbackVerse();
        }
        
        return [
            'verse' => $verse_text,
            'reference' => $reference ?: 'Romans 6:11-12',
            'date' => date('Y-m-d'),
            'timestamp' => time()
        ];
    }
    
    private function isCacheValid() {
        if (!file_exists($this->cache_file)) {
            return false;
        }
        
        $cache_time = filemtime($this->cache_file);
        return (time() - $cache_time) < $this->cache_duration;
    }
    
    private function getCachedVerse() {
        if (!file_exists($this->cache_file)) {
            return false;
        }
        
        $cached_data = json_decode(file_get_contents($this->cache_file), true);
        return $cached_data ?: false;
    }
    
    private function cacheVerse($verse_data) {
        file_put_contents($this->cache_file, json_encode($verse_data));
    }
    
    private function getFallbackVerse() {
        // Fallback verses for when API is unavailable
        $fallback_verses = [
            [
                'verse' => 'In the same way, count yourselves dead to sin but alive to God in Christ Jesus. Therefore do not let sin reign in your mortal body so that you obey its evil desires.',
                'reference' => 'Romans 6:11-12',
                'date' => date('Y-m-d'),
                'timestamp' => time()
            ],
            [
                'verse' => 'For I know the plans I have for you, declares the Lord, plans to prosper you and not to harm you, to give you hope and a future.',
                'reference' => 'Jeremiah 29:11',
                'date' => date('Y-m-d'),
                'timestamp' => time()
            ],
            [
                'verse' => 'Trust in the Lord with all your heart and lean not on your own understanding; in all your ways submit to him, and he will make your paths straight.',
                'reference' => 'Proverbs 3:5-6',
                'date' => date('Y-m-d'),
                'timestamp' => time()
            ]
        ];
        
        // Return a random fallback verse
        return $fallback_verses[array_rand($fallback_verses)];
    }
}

// Function to get verse for display
function getVerseOfTheDay() {
    $verse_api = new VerseOfTheDay();
    return $verse_api->getTodaysVerse();
}
?>