<?php
    include_once 'connect.php';
    
    /* SLIDESHOW */
    function getSlideshow(){
        connection();
        global $connect;
        $resultId = mysqli_query($connect, "SELECT id FROM slideshow");
        if (!$resultId) {
            die(mysql_error());
        }
        echo "<ol class='carousel-indicators'>";
        while ($row = mysqli_fetch_array($resultId)) {
            $indicators[] = $row['id'];
        }
        fixIndicators(count($indicators));
        echo "</ol><div class='carousel-inner' role='listbox'>";
        $resultSlide = mysqli_query($connect, "SELECT * FROM slideshow");
        if (!$resultSlide) {
            die(mysql_error());
        }
        while ($row = mysqli_fetch_array($resultSlide)) {
            createSlides($row['id'], $row['img'], $row['caption']);
        }
        createControls();
        echo "</div>";
        
        mysqli_close($connect);
    }
    function createIndicators($num){
        if($num === 0){
            echo "<li data-target='#slideshowIndicators' data-slide-to='$num' class='indic active'></li>";
        }else{
            echo "<li data-target='#slideshowIndicators' data-slide-to='$num' class='indic'></li>";
        }
    }
    function fixIndicators($num){
        for($i = 0; $i < $num; $i++){
            createIndicators($i);
        }
    }
    function createSlides($id, $imgUrl, $text){
        $id--;
        if($id === 0){
            echo "<div class='carousel-item active' data-src='$imgUrl'>";
        }else{
            echo "<div class='carousel-item' data-src='$imgUrl'>";
        }
        echo "<div class='carousel-caption'>";
        echo "<h3><b>$text</b></h3>";
        echo "</div></div>";
    }
    function createControls(){
        echo "  <a class='carousel-control-prev' href='#slideshowIndicators' role='button' data-slide='prev'>
                    <i class='fa fa-3x fa-chevron-circle-left' aria-hidden='true'></i>
                    <span class='sr-only'>Previous</span>
                </a>";
        echo "  <a class='carousel-control-next' href='#slideshowIndicators' role='button' data-slide='next'>
                    <i class='fa fa-3x fa-chevron-circle-right' aria-hidden='true'></i>
                    <span class='sr-only'>Next</span>
                </a>";
    }
    
    /* EVENTS */
    function getEvents(){
        connection();
        global $connect;
        $result = mysqli_query($connect, "SELECT * FROM events");
        if (!$result) {
            die(mysql_error());
        }
        while ($row = mysqli_fetch_array($result)) {
            createEvents($row['title'], $row['code'], $row['date'], $row['time'], $row['cover']);
        }
        
        mysqli_close($connect);
    }
    function createEvents($title, $code, $date, $time, $cover){
        $timeClean = date('g:ia', strtotime($time));
        echo "<div class='col-xs-12 col-md-6 col-lg-4'>
                <div class='event'>
                    <h3 class='eventTitle'>$title</h3>
                    <div class='ticket'>
                        <div class='ticketCover' onclick=\"fatsomaEventsWidget.showEvent('$code')\" href='#event_id=$code'>
                            <img class='img-fluid img-thumbnail ticketImage' src='$cover'>
                            <div class='middle'>
                                <div class='text'>Buy tickets</div>
                            </div>
                        </div>
                        <div class='ticketTime'>
                            <p>$date | $timeClean</p>
                        </div>
                    </div>
                </div>
            </div>";
    }

    /* VIDEOS */
    function getVideos() {
        $channel_id = 'UCeUIxUyTQVxeUvZvbp8xdaA';
        $xml = simplexml_load_file(sprintf('https://www.youtube.com/feeds/videos.xml?channel_id=%s', $channel_id));

        echo "<div class='row SWvideo'>";
        for ($i = 0; $i < 4; $i++) {
            if (!empty($xml->entry[$i]->children('yt', true)->videoId[0])) {
                $id[$i] = $xml->entry[$i]->children('yt', true)->videoId[0];
            }
            echo "<div class='col-sm-6'><div class='embed-responsive embed-responsive-16by9'>";
            echo "<iframe class='embed-responsive-item' src='//www.youtube.com/embed/$id[$i]'></iframe>";
            echo "</div></div>";
        }
        echo "</div>";
    }
    
    /* FAQS */
    function getFaqs() {
        connection();
        global $connect;
        $result = mysqli_query($connect, "SELECT question, answer FROM faq");
        if (!$result) {
            die(mysql_error());
        }
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                createFaq($row['question'], $row['answer']);
            }
        }
        
        mysqli_close($connect);
    }    
    function createFaq($question, $answer){
        echo "<div class='row mb-1'>";
        echo "<div class='col-12 bg-dark text-white py-2 px-4 mb-1 faqQuestion'><i class='fa fa-caret-right'></i><span class='faqExt'></span><span class='faqInt'>$question</span></div>";
        echo "<div class='col-12 text-justify collapsibleItem'><p class='m-0'>$answer</p></div>";
        echo "</div>";
    }
    
    /* INFOS */
    function getInfos() {
        connection();
        global $connect;
        $result = mysqli_query($connect, "SELECT address, phone, mail FROM info LIMIT 1");
        if (!$result) {
            die(mysql_error());
        }
        while ($row = mysqli_fetch_array($result)) {
            createInfoPanel($row['address'], $row['phone'], $row['mail']);
        }
        
        mysqli_close($connect);
    }
    function createInfoPanel($address, $phone, $mail){
        echo "<i class='fa fa-caret-right' aria-hidden='true'></i> $address<br>";
        echo "<i class='fa fa-caret-right' aria-hidden='true'></i> Phone: $phone<br>";
        echo "<i class='fa fa-caret-right' aria-hidden='true'></i> Email: <a href='mailto:$mail' target='_top'>$mail</a>";
    }
    
    /* GALLERY */
    function getAlbums(){
        connection();
        global $connect;
        $result = mysqli_query($connect, "SELECT * FROM gallery");
        if (!$result){
            die(mysql_error());
        }
        while($row = mysqli_fetch_array($result)){
            createAlbums($row['id'], $row['title'], $row['cover'], $row['date']);
        }
        
        mysqli_close($connect);
    }
    function createAlbums($id, $title, $img, $date){
        echo   "<div id='card$id' class='card col-4 col-md-4' onclick='populateModal($id)'>
                    <img class='card-img-top' src='../$img'>
                    <div class='card-block'>
                        <h4 class='card-title'>$title</h4>
                        <p class='card-text'><small class='text-muted'>$date</small></p>
                    </div>
                </div>";
    }
    if(isset($_GET['function']) && $_GET['function'] == 'getPhotos') {
        $id = $_GET['id'];
        connection();
        global $connect;
        $result = mysqli_query($connect, "SELECT link FROM photo WHERE $id = albumId");
        if (!$result){
            die(mysql_error());
        }
        while($row = mysqli_fetch_array($result)){
            $img = $row['link'];
            echo "<img src='$img' class='col-2 img-fluid rounded'>";
        }
        
        mysqli_close($connect);
    }
?>