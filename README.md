<h1>GetupMVC</h1>
GetupMVC is a MVC inspired framework. This document will show you how to install and how to configure runimentary functionality. This document will continue in swedish.


<h2>Installation</h2> 


<h3>Setup</h3>
För att klona GetupMVC från GitHub så behöver du först installera Git Bash eller Git GUI på din dator. Git Bash/ Git GUI nedladdningar går att hitta på följande länk: http://git-scm.com/downloads

För att sedan använda dig av GetupMVC så behöver du ett filredigeringsprogram för webbfiler så som Dreamweaver eller jEdit. Det finns ett flertal andra alternativ på webben. 

När du har laddat ner Git Bash eller Git GUI och installerat klart så öppnar du programmet. Den här guiden kommer vidare att utgå från att du använder dig av Git Bash. 

<h3>1. Välj mapp/skapa mapp</h3>
Skriv in koden nedanför i Git Bash för att öppna en mapp; utelämna dollar-tecknet då den endast utmärker Bash kod:
<pre>
$ cd Your_desierd_loaction  
</pre>

Du kommer automatiskt hamna i C:/User/UserName om du installerat Git Bash på C:. För att gå upp ett eller flera steg så använder du två punkter, ett par för varje mapp, som i exemplet nedan där man gått från C:/User/Username till D:/wamp/www/Map:

<pre>
$ cd ../../d/wamp/www/Mapp
</pre>

Alternativt skapa en ny mapp på den önskade platsen...:
<pre>
$ mkdir FolderName
</pre>

Och öppnar den:
<pre>
$ cd FolderName
</pre>

<h3>2. Klona</h3>
Sedan så klonar du GetupMVC till den valda mappen från GitHub med koden nedan:
<pre>
$ git clone git://github.com/krovvy/GetupMVC-Framework.git
</pre>
GetupMVC-Framework kommer att läggas i en egen mapp, i mappen som du tidigare valt. Nu har du GetupMVC på din dator!

<h3>3. RewriteBase</h3>
Öppna filen .htaccess i GetupMVC-Framework i ett webbfil-hanteringsprogram så som Dreamweaver eller jEdit. Ändra RewriteBase /~your/base/file/location/GetupMVC-Framework/ till där GetupMVC-Framewrok mappen ligger på 
din server eller i dina lokala filer. 

<h3>4. Göra databasen skrivbar</h3>
Gör GetupMVC databasen skrivbar genom att öppna GetupMVC-Framework mappen i Git Bash, om den inte redan är öppen (du ser detta i den gula texten efter den gröna namntexten), och ändra chmod till 777 på site/data:
<pre>
$ cd GetupMVC-Framework; chmod 777 site/data 
</pre>
I vissa fall, om man har lokala filer och sedan drar över dessa till en extern server så kan man behöva ändra chmod på servern manuellt. För att dra över filer till en server så kan man använda programmet Filezilla. På dina serverfiler;gå in på GetupMVC-Framwork/site/data och gör en chmod 777 på data-mappen. 

<h3>5. Öppna i webbläsaren och initiera</h3>
Öppna ramverkets index-fil genom att peka på den i webbläsaren med adressändelsen: www.your.server.se/your/base/file/location/GetupMVC-Framework/

För att sedan installera GetupMVC initierar du databasen genom att klicka på länken längst ner under rubriken "Installation" som heter module/install.

Ramverket är installerat och klar för användning!


<h2>Konfiguration</h2>


<h3>Utseende CSS</h3>
För att ändra utseendet på GetupMVC så öppnar du GetupMVC-Framework/site/themes/mytheme/style.css i en filredigerare, till exempel Dreamweaver eller jEdit.
  I style.css så ligger det ett antal tomma css referenser som exempel för vad som kan redigeras på ramverket. 
Du kan bland annat ändra färg på bakgrund och html, text storlek och färg, navigeringsmenyn, titel, sidhuvud, sidfot med mera. 
  Ramverkets grund CSS hittar du på GetupMVC-Framework/themes/grid/style.css.

<h3>Layout</h3>
För att ändra webbsidans layout i mer drastiska drag så kan du gå in på filen index.tpl.php i GetupMVC-Framework/themes/grid/index.tpl.php - fast det är rekommenderat att hålla sig till att justera CSS-filen, som nämnt i ovanstående stycke, om man precis börjat bekanta sig med GetupMVC ramverket. 

<h3>Sidfot</h3>
För att ändra texten på sidfoten så öppnar du filen GetupMVC-Framework/themes/functions.php. För att ändra copyright texten så får du istället gå in på GetupMVC-Framework/site/config.php och ändra denna längst ner i config.php på rad 184, under rubriken "Settings for the theme. The theme may have a parent theme.".

<h3>Ändra fixerade delar av webbsidan så som titel och logotyp</h3>
För att byta logotyp eller favicon så behöver du öppna filen GetupMVC-Framework/site/config.php och ändra bilden på rad 180 samt 181. Här går det även att ändra webbsidans titel, slogan, logotypstorlek samt footer information.

<h3>Skapa en egen webbsida</h3>
Som standard så ligger det tre menyalternativ för skapandet av den egna webbsidan: About me, My work samt Guestbook. För att konfigurera dessa filer så kan du öppna en utav dessa template-filer i GetupMVC-Framework/site/src/CCMycontroller; blog.tpl.php, guestbook.tpl.php, page.tpl.php.

För att lägga till eller byta titel på någon utav menyalternativen för den egna webbsidan så behöver du öppna filen GetupMVC-Framework/site/config.php och ändra informationen som börjar på rad 132, under rubriken "Define menus",  " 'my-navbar' => array( " . Här kan du ta bort menyalternativ eller lägga till för att justera antalet sidor på din webbsida. Hur du vidare lägger till en ny sida beskrivs mer ingående i nästa sektion.

<h3>Lägga till en ny sida</h3>
För att lägga till en ny sida så krävs det att man redigerar tre filer:
CCMycontroller.php
config.php
mywork.php

Följ stegen nedan för att lära dig hur man lägger till en ny sida till din webbsida.

<h5>CCMycontroller.php</h5>
Om du vill lägga till en ny sida till din hemsida så börjar du med att öppna GetupMVC-Framework/site/src/CCMycontroller/CCMycontroller.php.
  I början av dokumentet, på rad 13, så finns tre rubriker som lyder "The page about me", "The blog" och "The guestbook". Under dessa rubriker så finns det var sin publik funktion som sköter presentationen av var och en av dem. Här lägger du till en ny publik funktion för att börja skapa en ny sida.
  Här nedan finns ett exempel på hur koden för "About me" sidan ser ut, under rubriken "The page about me":

<pre><code>
 /**
* The page about me
*/
 public function Index() {
    $content = new CMContent(5);
    $this->views->SetTitle('About me'.htmlEnt($content['title']))
                ->AddInclude(__DIR__ . '/page.tpl.php', array(
                  'content' => $content,
                ));
  }
</code></pre>

Det som behöver ändras är alltså numret i $content = new CMContent(5), titlen 'About me' samt '/page.tpl.php'. 
Rubriken "The page about me" är inte nödvändig för att koden ska fungera utan för att hålla ordning på 
innehållet och dokumentationen. 
  Säg att vi skapar en sida som visar upp allt vårt arbete, då tar man bort numret (numret hänvisar till en 
databastabell i CMContent, vilket håller i default texter för ramverket), titlen 'My work', sid-filen 
'page2.tpl.php' och rubriken "The page about my work":

<pre><code>
 /**
* The page about my work
*/
  public function Index() {
    $content = new CMContent();
    $this->views->SetTitle('My work'.htmlEnt($content['title']))
                ->AddInclude(__DIR__ . '/mywork.php', array(
                  'content' => $content,
                ));
  }
</code></pre>

<h5>config.php</h5>
Nästa fil som behöver ändras är GetupMVC-Framework/site/config.php. Öppna den. På radnummer 124, under rubriken 
"Define menues", så finns det en kodrad som lyder: $ly->config['menus']. För att ändra webbsidans meny så behöver 
du gå ner till rad 132: 'my-navbar' => array(, varav därunder redan finns tre alternativ: 'home', 'blog' 
samt 'guestbook':

<pre><code>
     'my-navbar' => array(
         'home' => array('label'=>'About Me', 'url'=>'my'),
         'work' => array('label'=>'My Work', 'url'=>'my/work'),
         'blog' => array('label'=>'My Blog', 'url'=>'my/blog'),
         'guestbook' => array('label'=>'Guestbook', 'url'=>'my/guestbook'),
</code></pre>

Den raden som börjar med "work" är raden som har lagts till. Det som har ändrats i jämförelse med de andra 
raderna är orden 'work', 'My work' samt 'my/work'. Du lägger menyalternativen i vilken ordning som du än önskar. 

<h5>mywork.php</h5>
Det sista som behöver göras är att skapa en ny php fil, vilket i det här fallet kallas mywork.php. Du kan skapa 
den här filen antingen genom att kopiera page.tpl.php eller skapa en tom php fil och fylla med den html och php kod som än vill.

Det som är speciellt med page.tpl.php är koden som finns där gör det möjligt att redigera sidans innehåll på webben. 
Allt beror på vad som passar bäst för användarens behov. page.tpl.php ligger i GetupMVC-Framewrok/site/src/CCMycontroller. Spara alla uppdateringar och öppna GetupMVC ramverket online på adressen: www.your.server/GetupMVC/my/work.  
