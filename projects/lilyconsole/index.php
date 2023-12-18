<?php

$url = json_decode(file_get_contents("project.json"))->url;
header("Location: $url");