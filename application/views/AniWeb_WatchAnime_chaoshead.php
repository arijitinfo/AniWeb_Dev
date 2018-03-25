
<body class="body">
    <div class="head">
        <div class="headlogo">
                <img class="aniweblogo" src="<?php echo base_url(); ?>public/SRC/fapmirallogo.png">
        </div>
        <div class="headlogin">
                <button class="btnheadlogin">LOGIN</button>

                <div class="headsearch">
                        <input type="text" name="searchanime" id="seachanime" class ="txtsearchanime"list="animes">
                        <datalist id="animes">
                            <option value="Akame Ga Kill!">
                            <option value="Blend S">
                            <option value="Chaos;Head">
                            <option value="DanMachi">
                            <option value="Eromanga Sensei">
                            <option value="Fate/Zero">
                            <option value="Gabriel's Dropout">
                            <option value="Himouto Umaru-chan">
                            <option value="IS: Infinite Stratos">
                            <option value="Log Horizon">
                            <option value="Made In Abyss">
                            <option value="No Game No Life">
                            <option value="Rakudai Kishi no Cavalry">
                            <option value="S.A.O. : Sword Art Online">
                            <option value="Tokyo Ghoul">
                            <option value="Re:Zero Hajimeru Isekatsu">
                        </datalist>

                        <button class="btnheadsearch" onclick="searchanime()">Search</button>
                </div>
        </div>
      

    </div>

    <div class="headnav">
            <button class="btnheadnavhome" id="btnHome" onclick="returnhome()">HOME</button>
            <button class="btnheadnavanimelist" id="btnAnimeList" onclick="goanimelist()">Anime List</button>
            <button class="btnheadnavgenres" onclick="gogenrelist()">Genres</button>
            <button class="btnheadnavabout" onclick="goabout()">About</button>
    </div>

    <div class="promotionnote">
        <img class="prompic" src="<?php echo base_url(); ?>public/SRC/prompicleft.png">
        <p class="promnote">Watch Anime and Enjoy Fast Updates and High Quality videos. We have completed series of Anime for Online streaming. If this is your first visit, be sure to bookmark us.</p>
        <img class="prompic" src="<?php echo base_url(); ?>public/SRC/prompicright.png">
    </div>

    <div class="animeviewtile">
    <div class="animewatchtile">
                <div>
                                <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/chaos_head.jpg" onclick="watchanime_chaoshead()">
                                </div>
                                <div> 
                                        <h3 class="animelisttitle" onclick="watchanime_chaoshead()">Chaos;Head</h3>
                                        <div>
                                                <p class="genre">Genres :  Harem, Mystery, Psychological, Sci-Fi, Supernatural</p>
                                                <p class="summary">Summary :</p>
                                                <p class="summarytext"> Shibuya, Japan, 2008. Takumi Nishijou, a high school student at the Private Suimei Academy, one day hears about the 'New Gen' murders that have been occurring around the city. Although dismissing the subject because it doesn't involve him, Takumi begins to experience strange mishaps around him, from a horrific picture he received while on his PC, to a mysterious Pink-Haired girl standing at a murder scene.From there on Takumi struggles to cope with the events unfolding around him, and is soon unaware of what is real or a delusion.</p>    
                                        </div>
                                </div>      
                </div>


    </div>

    <div class="videoarea">
                        <select class="episodenum" id="episodenum" onchange="playepisodes_chaoshead()">
                                <option value="1">Episode 1</option>
                                <option value="2">Episode 2</option>
                                <option value="3">Episode 3</option>
                                <option value="4">Episode 4</option>
                                <option value="5">Episode 5</option>
                                <option value="6">Episode 6</option>
                                <option value="7">Episode 7</option>
                                <option value="8">Episode 8</option>
                                <option value="9">Episode 9</option>
                                <option value="10">Episode 10</option>
                                <option value="11">Episode 11</option>
                                <option value="12">Episode 12</option>
                        </select>
        <video controls controlsList="nodownload" class="videoplayarea">
                <source src="<?php echo base_url(); ?>public/SRC/VIDEOS/samplevid.mp4" type="video/mp4" >
                Your browser does not support HTML5 video.
        </video>

        <!-- <button class="btndownload"><a href="public/SRC/VIDEOS/samplevid.mp4" download>DOWNLOAD</a></button> -->
        <hr style="margin-top: 3%;">
    <!-- <h3 style="color:beige; margin: 0% 44%;">Episode List</h3>
    <hr>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 1</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 2</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 3</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 4</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 5</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 6</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 7</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 8</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 9</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 10</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 11</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 12</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 13</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 14</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 15</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 16</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 17</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 18</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 19</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 20</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 21</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 22</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 23</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 24</h2> -->
    </div>
    
   
   

    
    <div class="CRtile">
                <P class="crpara">AniWeb. Copyrights and trademarks for the anime, and other promotional materials are held by their respective owners and their use is allowed under the fair use clause of the Copyright Law.</P>
        </div>


</body>