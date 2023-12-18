<html>
<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#ffff00">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffff00">
    <link rel="stylesheet" type="text/css" href="/projects/css/flex.css">
    <link rel="stylesheet" type="text/css" href="/projects/css/main.css">
    <link rel="icon" type="image/png" href="/res/icon-32.png">
    <title>yello.ooo — my projects</title>
</head>
<body>
<h1 id="title">my projects — <a href="/">back to main</a></h1>
<div class="flex-container flex-container-style fixed-height">
<?php
require_once('inc/Slimdown.php');

$old_projects = [];
$old_shown = true;

function get_project_url($name, $project) {
    if (isset($project->url)) {
        return $project->url;
    } else {
        return './' . $name;
    }
}

function get_project_image($name, $project) {
    if (isset($project->image)) {
        return implode(DIRECTORY_SEPARATOR, ['.', $name, $project->image]);
    } else {
        return '';
    }
}

function get_project_name($name, $project) {
    if (isset($project->name)) {
        return $project->name;
    } else {
        return $name;
    }
}

function get_project_desc($project) {
    if (isset($project->desc)) {
        return $project->desc;
    } else {
        return '';
    }
}

$dirs = array_values(array_filter(glob('*'), 'is_dir'));
foreach($dirs as $id => $proj_name) {
    if (file_exists("$proj_name/project.json")) {
        $p = json_decode(file_get_contents("$proj_name/project.json"));
        if (isset($p->old)) {
            if ($p->old) {
                $old_projects[] = [$proj_name, $p];
                continue;
            }
        }
    }
    else continue;

    $name = get_project_name($proj_name, $p);
    $desc = Slimdown::render(get_project_desc($p));
    $url = get_project_url($proj_name, $p);
    $image = get_project_image($proj_name, $p);

echo "<div class=\"flex-item\">
<div class=\"project-wrapper\">
<div class=\"project-content\">
<div class=\"project-image\" style=\"background-image: url('$image')\"></div>
<div class=\"project-name bold\">$name</div>
</div>
<div class=\"project-desc\">$desc</div>
<a href=\"$url\"><div class=\"project-link bold\"><span>Visit project page</span></div></a>
</div>
</div>";

}
?>
</div>

    <?php

if(count($old_projects) > 0 && $old_shown) {

    echo '<h1 id="title">former projects</h1><div class="flex-container flex-container-style fixed-height">';

foreach ($old_projects as $p) {

    $name = get_project_name($p[0], $p[1]);
    $desc = Slimdown::render(get_project_desc($p[1]));
    $url = get_project_url($p[0], $p[1]);
    $image = get_project_image($p[0], $p[1]);


    echo "<div class=\"flex-item\">
<div class=\"project-wrapper\">
<div class=\"project-content\">
<div class=\"project-image\" style=\"background-image: url('$image')\"></div>
<div class=\"project-name bold\">$name</div>
</div>
<div class=\"project-desc\">$desc</div>
<a href=\"$url\"><div class=\"project-link bold\"><span>Visit project page</span></div></a>
</div>
</div>";
}

echo '</div>';

}

?>
</body>
</html>
