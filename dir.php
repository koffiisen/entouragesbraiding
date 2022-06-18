var galleryfiles = <?php $out = array();
$x = 0;
foreach (glob('images/customers/*') as $filename) {
    $p = pathinfo($filename);
    $out[$x] = array(
        'src' => $p['basename'],
        'srct' => $p['basename'],
        'title' => $p['filename'],

    );
    $x++;
}
echo json_encode($out); ?>;
