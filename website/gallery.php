<?php
include('config.php');
include('includes/header.php'); ?>

<?php
$people['Vinyasa_Yoga'] = 'vin_<b>Vinyasa</b> is a smooth transition between asanas in styles of modern yoga as exercise such as Vinyasa Krama Yoga, Ashtanga Vinyasa Yoga and Bikram Yoga, especially when movement is paired with the breath.';
$people['Restorative_Yoga'] = 'res_<b>Restorative</b>Yoga is the practice of asanas, each held for longer than in conventional yoga as exercise classes, often with the support of props such as folded blankets, to relax the body, reduce stress, and often to prepare for pranayama.';
$people['Yin_Yoga'] = 'yin_<b>Yin</b>Yoga is a slow-paced style of yoga as exercise, incorporating principles of traditional Chinese medicine, with asanas that are held for longer periods of time than in other styles..';
$people['Kundalini_Yoga'] = 'kun_<b>Kundalini</b> yoga derives from kundalini, defined in Vedantic culture as energy that lies dormant at the base of the spine until it is activated and channeled upward through the chakras in the process of spiritual perfection. Kundalini is believed by adherents to be power associated with the divine feminine.';
$people['Hatha_Yoga'] = 'hat_<b>Haṭha</b> yoga is a branch of yoga. The Sanskrit word हठ haṭha literally means "force" and thus alludes to a system of physical techniques.';

// $name                      $image
// $key                         $table
?>
<div id="wrapper">

    <table>
        <?php foreach($people as $name => $image) : ?>
            <tr>
                <td><img src="images/<?php echo substr($image, 0, 3) ; ?>.jpg" alt="<?php echo str_replace('_', ' ', $name) ; ?>"></td>
                <td><?php echo str_replace('_', ' ', $name) ; ?></td>
                <td><?php echo substr($image, 4); ?></td>
                <td><img src="images/<?php echo substr($image, 0, 4) ; ?>.jpg" alt="<?php echo str_replace('_', ' ', $name) ; ?>"></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php
include('includes/footer.php');