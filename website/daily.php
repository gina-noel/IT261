<?php
include('includes/header.php'); ?>

<?php
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Monday' :
        $yoga = '<h2>Monday is our Vinyasa yoga Day!</h2>';
        $pic = 'vinyasa.jpeg';
        $alt = 'Vinyasa yoga';
        $content ='<b>A vinyasa</b> is a smooth transition between asanas in styles of modern yoga as exercise such as Vinyasa Krama Yoga, Ashtanga Vinyasa Yoga and Bikram Yoga, especially when movement is paired with the breath.';
        echo '<body style="background-color: rgba(180,203,181,0.98)">';
        break;

    case 'Tuesday' :
        $yoga = '<h2>Tuesday is our Hatha yoga Day!</h2>';
        $pic = 'hatha.jpg';
        $alt = 'Hatha yoga';
        $content ='<b>Haṭha yoga</b> is a branch of yoga. The Sanskrit word हठ haṭha literally means "force" and thus alludes to a system of physical techniques.';
        echo '<body style="background-color: rgba(140,203,133,0.98)">';
        break;

    case 'Wednesday' :
        $yoga = '<h2>Wednesday is our Bikram yoga Day!</h2>';
        $pic = 'bikram.jpg';
        $alt = 'Bikram yoga';
        $content ='<b>Bikram Yoga</b> is a system of hot yoga, a type of yoga as exercise, devised by Bikram Choudhury and based on the writings of B. C. Ghosh, that became popular in the early 1970s.';
        echo '<body style="background-color: rgba(203,165,199,0.98)">';
        break;

    case 'Thursday' :
        $yoga = '<h2>Thursday is our Yin yoga Day!</h2>';
        $pic = 'yin.jpg';
        $alt = 'Yin yoga';
        $content ='<b>Yin Yoga</b> is a slow-paced style of yoga as exercise, incorporating principles of traditional Chinese medicine, with asanas that are held for longer periods of time than in other styles.';
        echo '<body style="background-color: rgba(187,199,203,0.98)">';
        break;

    case 'Friday' :
        $yoga = '<h2>Friday is our Restorative yoga Day!</h2>';
        $pic = 'restorative.jpg';
        $alt = 'Restorative yoga';
        $content ='<b>Restorative Yoga</b> is the practice of asanas, each held for longer than in conventional yoga as exercise classes, often with the support of props such as folded blankets, to relax the body, reduce stress, and often to prepare for pranayama.';
        echo '<body style="background-color: rgba(203,183,132,0.98)">';
        break;

    case 'Saturday' :
        $yoga = '<h2>Saturday is our Kundalini yoga Day!</h2>';
        $pic = 'kundalini.jpg';
        $alt = 'Kundalini yoga';
        $content ='<b>Kundalini yoga</b> derives from kundalini, defined in Vedantic culture as energy that lies dormant at the base of the spine until it is activated and channeled upward through the chakras in the process of spiritual perfection. Kundalini is believed by adherents to be power associated with the divine feminine.';
        echo '<body style="background-color: rgba(88,199,203,0.98)">';
        break;

    case 'Sunday' :
        $yoga = '<h2>Sunday is our Ashtanga yoga Day!</h2>';
        $pic = 'ashtanga.jpg';
        $alt = 'Ashtanga yoga';
        $content ='<b>Ashtanga Yoga</b> is a style of yoga as exercise popularised by K. Pattabhi Jois during the 20th century, often promoted as a modern-day form of classical Indian yoga. He claimed to have learnt the system from his teacher, Tirumalai Krishnamacharya. The style is energetic, synchronising breath with movements.';
        echo '<body style="background-color: rgba(172,128,203,0.98)">';
        break;
}
?>
<div id="wrapper">

  <main>
      <h1><?php echo $headline; ?></h1>
      <?php
      echo $yoga;
      ?>
      <img src="images/<?php echo $pic; ?>"alt="<?php echo $alt; ?>">
      <p><?php echo $content;?></p>

  </main>
  <aside>
      <h2>Other Daily Yoga Challenges</h2>
      <ul>
          <li><a href="daily.php?today=Monday">Monday</a></li>
          <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
          <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
          <li><a href="daily.php?today=Thursday">Thursday</a></li>
          <li><a href="daily.php?today=Friday">Friday</a></li>
          <li><a href="daily.php?today=Saturday">Saturday</a></li>
          <li><a href="daily.php?today=Sunday">Sunday</a></li>
      </ul>
  </aside>
<?php
include('includes/footer.php');