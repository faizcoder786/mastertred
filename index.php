<?php
    include_once('include/header.php');
    include_once('include/navebar.php');
    include_once('include/connection.php');
    $sql = "SELECT * FROM `post_d` WHERE `status` = '1'";
    $res = mysqli_query($con , $sql);
?>
     
    <div class="container">
        <div class="mimage">
            <!-- <img src="./admin//assests//image//mainimage.jpeg" alt="this is a main heading"> -->
            <div class="mover">
                    <a href="postpage.php"><h1>How Consistent jogging Enhancess Physical And...</h1></a>
            </div>
        </div>
        <div class="pmimage">
            <div class="bimage1">
                <div class="hbimage"><img src="admin/assests/image/camera.jpeg" alt="this is a image"></div>
               <div class="bh1">
                <a href="postpage.php"><h1>The Intersection of Smartphone Technology and Music Appreciation</h1></a>
                <button>Read more</button>
               </div>
    
            </div>
        </div>
    </div>
    <div class="pag2">
        <?php
            while ($row = mysqli_fetch_assoc($res)) {
                echo '
                    <div class="p2ibox1" id="p2ibox1">
                        <div class="p2image1"></div>
                        <div class="p2head">
                           <a href="postpage.php"> <h2>' .$row['heading'].'</h2></a><br>
                           <button>Read more</button>
                        </div>
                    </div>
            ';
            }
        ?>
        <!-- <div class="p2ibox1">
            <div class="p2image1"></div>
            <div class="p2tittle"></div>
            <div class="p2head">
                <a href="postpage.php"><h2>The Jewels That Keep Yoi Looking Chic And Cool In Summner</h2></a><br>
                <button>Read more</button>
            </div>
        </div>
        <div class="p2ibox1">
            <div class="p2image1"></div>
            <div class="p2tittle"></div>
            <div class="p2head">
                <a href="postpage.php"><h2>The Jewels That Keep Yoi Looking Chic And Cool In Summner</h2></a><br>
                <button>Read more</button>
            </div>
        </div> -->
    </div>
    <div class="pag3">
        <div class="ad"><h1>Ad hello World !</h1></div>
        <div class="p3container">
            <div class="p3collum1">
                <div class="p3h">
                    <a href="postpage.php"><h1>How to Consistent tradin Enhances practicle And Mind phychology </h1></a>
                </div>
            <div class="p3mi"></div>
            <div class="p3p">
              <a href="postpage.php"><p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus voluptatibus consequuntur voluptate. Molestias, obcaecati itaque quo ratione laudantium ipsam dolorem officia cumque rerum porro autem in, recusandae fugit doloremque quisquam.</p></a>
            </div>
            <div class="p2head">
                <!-- <a type="button" href="postpage.php">Read more</a> -->
                <button>Read more</button>
            </div>
            <div class="p3dc">
                <div class="p3coll1"> 
                    <div class="p3cb">
                        <div class="p3image">
                            <img src="admin/assests/image/camera.jpeg" alt="this is a image">
                        </div>
                        <div class="p3ib">
                            <button>Technology</button>
                        </div>
                        <div class="p3ih">
                            <a href="postpage.php"><h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sit voluptatem, ut provident voluptatibus.   
                            </h2></a>
                            <div class="likeshow">
                                <div class="il"></div>
                                <div class="ils"></div>
                                <div class="is"></div>
                                <div class="iss"></div>
                            </div>
                        </div>
                        <hr>
                        <div class="p3para">
                           <a href="postpage.php"> <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus dolorem et maiores fugit unde! Quidem culpa id mollitia.
                            </p></a>
                            <div class="p3parab">
                                <button>
                                    readmore
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="p3cb">
                        <div class="p3image">
                            <img src="admin/assests/image/camera.jpeg" alt="this is a image">
                        </div>
                        <div class="p3ib">
                            <button>Technology</button>
                        </div>
                        <div class="p3ih">
                           <a href="postpage.php"> <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sit voluptatem, ut provident voluptatibus.
                            </h2></a>
                        </div>
                        <hr>
                        <div class="p3para">
                            <a href="postpage.php"><p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus dolorem et maiores fugit unde! Quidem culpa id mollitia.
                            </p></a>
                            <div class="p3parab">
                                <button>
                                    readmore
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p3coll2">
                    <div class="p3cb">
                        <div class="p3image">
                            <img src="admin/assests/image/mainimage.jpeg" alt="this is a image">
                        </div>
                        <div class="p3ib">
                            <button>Technology</button>
                        </div>
                        <div class="p3ih">
                            <a href="postpage.php"><h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sit voluptatem, ut provident voluptatibus.
                            </h2></a>
                        </div>
                        <hr>
                        <div class="p3para">
                            <a href="postpage.php"><p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus dolorem et maiores fugit unde! Quidem culpa id mollitia.
                            </p></a>
                            <div class="p3parab">
                                <button>
                                    readmore
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="p3cb">
                        <div class="p3image">
                            <img src="admin/assests/image/googleimage.webp" alt="this is a image">
                        </div>
                        <div class="p3ib">
                            <button>Technology</button>
                        </div>
                        <div class="p3ih">
                           <a href="postpage.php"> <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sit voluptatem, ut provident voluptatibus.
                                </h2></a>
                        </div>
                        <hr>
                        <div class="p3para">
                            <a href="postpage.php"><p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus dolorem et maiores fugit unde! Quidem culpa id mollitia.
                            </p></a>
                            <div class="p3parab">
                                <button>
                                    readmore
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <?php
                    include_once('include/pagination.php');
                ?>
            </div>
            <!-- <div class="p3collum2">
                <div class="addsection">
                    <h2>Social Plugin</h2>
                    <hr>
                    <div class="socialicon">

                    </div>
                </div>
            </div> -->
            <?php
                include_once('include/socialpage.php');
            ?>
        </div>

    </div>
<?php
    include_once('include/footer.php');
?>
<!-- <script>
    loadPost();
</script> -->