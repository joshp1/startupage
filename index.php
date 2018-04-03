<html>
<head>
  <title>
    Starup/New Tab page
  </title>
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
  <table>
    <tr class="inp" >
      <td colspan="2">
        <div class="inb">
          <input id ='inpt'>
            <button type="submit" id="sbm">
              >
            </button>
          </input>
       </div>
      </td>
    </tr>
    <tr id="bmb">
      <td colspan="2">
        <div id='bookmark_hdr'>
          Bookmarks
        </div>
        <ul id="bookmark_bar">
          <li id='ic1' class="icn">
            link 1
          </li>
          <li id='ic2' class="icn">
            link 2
          </li>
          <li id='ic3' class="icn">
            link 3
          </li>
          <li id='ic4' class="icn">
            link 4
          </li>
          <li id='ic5' class="icn">
            link 5
          </li>
          <li id='ic6' class="icn">
            link 6
          </li>
          <li id='ic7' class="icn">
            link 7
          </li>
          <li id='ic8' class="icn">
            link 8
          </li>
          <li id='ic9' class="icn">
            link 9
          </li>
          <li id='ic10' class="icn">
            link 10
          </li>
          <li id='ic11' class="icn">
            link 11
          </li>
          <li id='ic12' class="icn">
            link 12
          </li>
          <li id='ic13' class="icn">
            link 13
          </li>
          <li id='ic14' class="icn">
            link 14
          </li>
          <li id='ic15' class="icn">
            link 15
          </li>
          <li id='ic16' class="icn">
            link 16
          </li>
          <li id='ic17' class="icn">
            link 17
          </li>
          <li id='ic18' class="icn">
            link 18
          </li>
          <li id='ic19' class="icn">
            link 19
          </li>
        </ul>
      </td>
    </tr>
    <tr>
      <td class="feeds" width="2000px">
        <!-- news feed area -->
        <div id="fdhd">News Feeds
        </div>

          <div class="tab">
            <button class="tablinks" onclick="openCity (event, 'aa')" id="defaultOpen"><div class="tabl">Google Headlines</div></button>
            <button class="tablinks" onclick="openCity (event, 'ab')"><div class="tabl">Google Local News</div></button>
            <button class="tablinks" onclick="openCity (event, 'ac')"><div class="tabl">Podcast</div></button>
            <button class="tablinks" onclick="openCity (event, 'ad')"><div class="tabl">Web Comics</div></button>
          </div>
          <div id='aa' class='tabcontent'>
            <h3>London</h3>
            <p>London captital of Enland</p>
          </div>
          <div id="ab" class="tabcontent">
            <h3>Paris</h3>
            <p>Captial of France. Fun to say witha French accent</p>
          </div>
          <div id='ac' class='tabcontent'>
            <h3>Tokeyo</h3>
            <p>Capital of Japan. Not spelled right but hell this is just a place holder</p>
          </div>
          <div id="ad" class='tabcontent'>
            <h3>Sidney</h3>
            <p>Known for a cool loking wave thingy statue</p>
          </div>

      </td>
      <td class="feeds">
        <!-- Pocket feed area-->
      </td>
    </tr>
  </table>

  <script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
</body>
</html>
