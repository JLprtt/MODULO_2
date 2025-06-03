<?php

for ($i=1; $i<35; $i++){
    $url = "https://elpais.com/deportes/resultados/futbol/primera/2024_2025/jornada/regular-a-$i/";

    $context = stream_context_create([
        "http" => ["header" => "User-Agent: Mozilla/5.0\r\n"]
    ]);
    
    $html = file_get_contents($url, false, $context);
    
    if (!$html) {
        die("Error al obtener el contenido.");
    }
    
    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    libxml_clear_errors();
    
    $xpath = new DOMXPath($dom);
    
    // Buscar todos los <li class="list-resultado">
    $partidos = $xpath->query("//li[contains(@class, 'list-resultado')]");
    
    foreach ($partidos as $partido) {
        $local = $xpath->query(".//div[contains(@class, 'equipo-local')]//span[contains(@class,'nombre-equipo')]", $partido)->item(0)?->nodeValue ?? '';
        $visitante = $xpath->query(".//div[contains(@class, 'equipo-visitante')]//span[contains(@class,'nombre-equipo')]", $partido)->item(0)?->nodeValue ?? '';
        $resultado = trim($xpath->query(".//div[contains(@class, 'cont-resultado')]//a[contains(@class,'resultado')]", $partido)->item(0)?->nodeValue ?? '');
    
        // Limpieza del resultado
        $resultado = preg_replace('/\s+/', ' ', $resultado);
    
        echo "<hr>$local $resultado $visitante\n";
    }
    
}
