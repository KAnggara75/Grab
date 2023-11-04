<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrabController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // Data From User
        $hhmm = $request->hhmm;
        $trip = $request->trip;
        $ddmm = $request->ddmm;
        $isCar = $request->isCar;
        $discount = $request->discount > 1000 ? $request->discount : 0;
        $isDiscount = $request->discount > 1000 ? true : false;
        $driverName = ["hafizhan shidqi", "gandhi wibowo", "aldio mahendra purwandrarto", "benny putra", "vicky vernando dasta", "jufianto henri", "abdur rahman", "abdurrahman", "bakti yoga fiyandana", "daniel sepra fatama", "dayu m sandro", "edi kurniawan wibowo", "fadil rahmat andini", "fahmi iqbal firmananda", "fairuzi", "gustian", "hermawan syah", "ibnuyohanzah ahmad", "muhammad maksum sugondo", "muhammad risfandanu", "adnil riza", "nurgivo alfajri", "rahmadi gusri", "rahmat", "said rio apriadi", "tarikhul mahfudz", "vido idramedi", "wahyu darmawan", "aditya dwi nugraha", "afrian djugi", "debby jayadi nugroho", "deny gustriansyah", "edmund andriano", "fajar aulia rahman", "fathiya hasyifah sibarani", "fauzar", "habzer maisera", "ikbal gazalba", "ikhsan firdaus", "jayus suryawan", "muhammad bagoes samaron", "muhammad hanafi", "muhammad ilham akbar khoiri", "narendra benny", "naufal abiyyu", "fadana bagus harsono", "rangga arief putra", "rangga dwi nugrawan", "saiful wahyudi", "taufik oktafiyardi", "teddy franwijaya", "vigo farlandi", "wahyu ernu setiawan", "yofaldi laksmana putra", "agus faturrahman", "agustiando rahmat", "aidil badri", "alfajri", "bayu hasan basyir aljawi", "desnando", "desri ardika", "ilham afandi aziz", "ilham fajri", "jukhri syahputra", "m. muawam", "m. yassir saputra jamina", "mardiyyat fadliellah", "mukhtar lutfi", "nazarudin yusuf", "rano abdul rahman", "raynaldi setiawan", "teresno maulana", "wendi gusfan hutapea", "zukri adinalta", "alfi sahri", "andre ganda wilaga putra", "andre oktora", "benni setiawan", "deswanto", "ferry ramadhan", "firdaus", "hamdani asril", "hijrah syahputra", "indra firman", "indri dian pertiwi", "kemal pasha", "muhammad sayuti nur nasution", "miftahur ridho", "muhammad wendi hidayat", "nofan widiyarna", "nurudin rahman", "rudi kurniawan", "thovanni jogga", "tian fitra kurniawan", "yudiatma adrion", "zukri rahman", "andre saputra", "andrianto", "andryan dwi cahyono", "angga wiratama", "firdaus", "muhammad adri", "muhammad alayyubi", "benny yohanes", "harika vaizal", "khairul fahmi purba", "muhammad triyoga sp", "reza fahlevi", "rudi wijaya", "tio doli raharjo", "boby adi oktarino", "dias marzal fatama", "dicky mahendra", "dika aristya linardi", "husnul habib", "irpandi kurniawan", "kurniawan eka putra", "muhammad asri wisnu wardana", "muhammad audi reza islami", "muhammad azmeer", "muhammad thoha", "padli nofrizal", "rahmat hidayat", "rian aries fani", "riandi selvi", "rianto", "ruwadi saputra", "sugeng hermawan", "tomi ismeidianto", "usthalay putra", "winggo aga septian", "yunaldi rizki putra", "arif fasetyo", "arie rahman satria", "asri jakawendra", "astri stiawaty", "boby rahman", "dimas aditya perdana", "doni sanjaya", "hendri eka saputra", "irwan ahmad gafur", "isa ismail", "kurniawan rosman a", "muhammad azmy", "muhammad ilham", "muhammad sholihan", "novri sabli saputra", "pajar bahari", "ridho", "ridho fajri", "ridho rismayanda", "ridwan candra", "supriadi", "tommy zul hidayat", "aulia rahman", "agung kurniawan", "ahmad fauzi paturusi", "arie biola gunti masuko", "azwar anas", "azwir irfan nanda", "budi setiawan", "dwiki apsyarin", "dwiza indri", "frans b jaya zalukhu", "fuad harisfa", "herman efendi", "ichsyan rizky adi p", "muhammad oki", "muhammad ridho ardonis", "muhammad rizqi muttaqin", "muhammad setyo", "pikril islami", "rikal", "riyan hidayat", "rizki fatama", "syaiful akbar", "nu' in sofyan", "sumirah", "ade surahman", "kasnanto", "sumirah", "teguh wahyudi", "sakiyo", "dwi kasmini", "laily mufarokah", "sigit nugroho", "linda rusmi wardani", "m. charly iman nugroho", "untung sugiono", "sarminah", "wiwik purwanti", "saputra", "muhammad fajar maulana", "muliadi", "andreyan saputra", "afrianda", "surya ramadani", "suhendri", "reza andika ramadhan", "slamet", "gilang aditia", "suherianto", "aris pratama putra", "widyo sudiro", "riza feri handoko", "angga adhy surya", "nelvin adhy renata", "suroso", "depri selamet ariadi", "ruswantoro", "muhammad prayoga winata", "heru setyono", "galih subekti", "ageng kurniawan", "slamet", "tri agus susilo", "junaeri", "daryono", "fajar setiawan", "jaimin", "m. amrijen nur rohman", "rosidin", "krisdan fauzi", "m. rais tri wahyudi", "ihsan baedowi", "rahmad erwin wibisono", "muhamad fiki wahyudi", "agus salim", "muhammad zamzari", "sumardi", "wahid suprayitno", "rasman", "uji ifandy saputra", "hana aida sahila", "mufizar ilyas", "nora", "ulviana agustina", "erina ramadhani", "sumono", "khoirul zaki", "warsini", "alif al barrak zaki", "sulistiyono", "jekri wiralis", "nirmanto", "rasmini", "bejo hutanto", "desi tri astuti", "okta ionika", "muhyidin", "meriyanti", "erna lestari", "asef saifulloh", "jonianto", "mujiati", "riko hari prasetyo", "diva al farizky", "parjo", "rumsiyah", "dewi sumarni", "efi sulastri", "wagimun", "girah", "feni safitri", "sumarno", "nurimah", "noviana anggraeni", "aissyah dwi zhaskia", "hariri", "ida budiani", "rizki pratama", "yanto", "aril aji alania", "suranto", "bangkit syuhada", "kasturi", "epran", "trio hamdani", "a. solikhin", "sugiat bagus hermawan", "dzul helmi affan ridho", "nugroho", "pri santoso", "miyanto", "wahyu pratama", "masruri", "ricky prayoga", "abdul malik", "kardi", "andika saputra", "habib hidayaturrohman", "m. souvil anam", "diram", "eko kurniawan", "romadon nur hidayat", "tri adi eko lestanto", "suyono", "sazim saputra", "hamzah maulana", "akbar maulana", "supriyadi", "alfajar efendi", "ahmad saprudin", "anwar sholeh", "santoso", "edi suyoto", "zidane dhevan pratama", "setiawan", "sutiono", "oki aditia saputra", "hendrio junior", "giatno", "ahmad rasyid", "gilang nur bekti", "abas suyatno", "abdul kholik", "dede adiyanto", "mustofa", "luhur gunawan", "r. widodo", "ismanto", "kurniawan zam zami", "raditia saputri", "mabruro", "muhammad arwin", "ulil amri", "karno", "danang wahyu ananda", "syamsul huda", "andika dwi pangestu", "mhd. yunus", "eka putra", "ananda reyhan pradipta", "d. maulana", "kasri", "eko rudiyanto", "muhyatin", "ikhsan amirrudin", "edi susanto", "riswanto", "suwanter", "sanmiadi watimin", "ahmad soleh", "nurfajri", "fauzan nuril kafa", "irhamsyah", "faisal", "eram", "kasman rasim", "narjam", "wahyu iswan arif", "ihwanul muslimin", "chomsin", "muhammad khoiron", "zen mahrom", "m. husmudin", "agus sugianto", "soni haji rifa'i", "munib alwi abdurohman", "hasim as'ari", "fathi nur sidiq", "misdianto", "nopriyadi", "ahmad thoyib", "agus ismail", "nafiudin", "suendik", "saputra", "romi endika", "imam subaweh", "imam turmudzi", "komarudin", "agus riyanto", "m. muhsin as ari", "mukhammad 'ainurrido", "imron mahmudi", "sumarno", "muhammad alfaqih", "wagiyo", "saim", "sanadi saleh", "jurianto", "pratama ade kurniawan", "erianto", "muhammad rizky aprianto", "ahmad zainuri", "ari sarianto", "hasyim asy'ari", "suritno", "m. sarengat", "sumari", "bagus suryanto", "mursino", "m. arif harfiyanto", "mansyur", "muhamat saiful safi'i", "dimaz reza ramadhan", "miseri", "agus nuryanto", "syahrul widianto", "alif ardana", "mujianto", "ahmad aji supriono", "rifa'i dwi cahyo", "karmidi", "debyo widya anggara", "sariman", "haspar sutedi", "suparno", "rafkan djovanka al fariz", "volint", "wasyaraffa al hafiz", "nur sodik", "ach. moehaimin alwi", "muhammad faizin alwi", "sarno", "andrianto", "fajri syahdan naufal", "wahidi", "sukijan", "sodikin", "mas' ud", "ahmad safi'i", "habibi nurrohim", "suparlan", "kirno yudi", "aris tiono", "ibnu mirza hamizan alfaeyza", "apri hantoro", "suratman", "sukarmin", "firda ramadan", "fauzi hidayat", "ahmad suyadi", "muhammad abdul rohman", "yendra putra", "rudi saputra", "agus setiawan", "saiman", "darma sahputra", "rhamasya damar", "supratman", "nanang mujahid", "rizal kurniawan", "hamdan muzakir", "hadi mardiansah", "aziz", "suyoto", "alek susanto", "aris setianto", "teguh adi wijaya", "suwarmin,LK", "iqbal akbar ghofur", "mardani satra", "bastiur", "al hakim januario barens", "amal fatullah", "yusman", "waluyo", "rudianto", "akbar rizki saputra", "slamet teguh santoso", "solehan", "yuli adi putra", "solehan", "muhammad ahsanul mubtadi'in", "muhammad rifki irawan", "sarno", "pursito", "saikun", "jefri setiadi", "krisno tri widodo", "katiman", "jumali", "suratno", "fauzan adi saputra", "mariyauddin", "reza indra saputra", "dimas dwi fadilah", "faiz ahza praditya", "sudin", "tukijo al rifa' i", "irvan maulana", "alfin akbar rifa'i", "samidi", "salim", "slamet", "fendi selistiawan", "kelvin naszril tri efendi", "sugianto", "arif nova baihaqi", "sutiono", "m. ikhwan amsyahputra", "joni kartinus", "rahmat tri apriliando", "muhammad aprila", "warhan", "irwan efendi", "sugiarto", "mukhlis sariadin", "sukadi", "rudi febrianto", "sugeng pribadi", "sutiman", "ahmad nizam alfarizi", "syahrul", "muksin", "gino", "trisno", "luthfi abdillah", "sucipto", "muhammad albana", "harun fadhillah", "shoffan al fath", "hanif fatchan mujib", "sutrisno", "adif zaldiansyah", "ujang umin ruhdiansyah", "ivan gustomi", "alhadmin", "m. khuza alhasby", "ismail", "qoridhotul mutakin", "khafidhotus sany", "slamet", "m. aditya hatta", "sumarno", "kasmari", "tawirja", "rudianto", "siswanto", "nanda lucky firmansyah", "zulvan arfa syazwan", "handri", "rizki septiadi", "suyadi", "sujono", "m. tolib syahbarul", "muhammad afdal affandi", "dedi iswandi", "ahmad purwito", "agus fahrizal", "murdiansyah", "ali hamzah", "egi aulia pirdaus", "rasidin", "rebo", "ilham setiaji", "muhamad aziz", "surya kusuma", "irza syahputra", "asim", "vebri kurniawan", "ahmad diinulkha", "didik siswanto", "sigit sugiyanto", "mukarom", "miftakhul qolbi", "abdullah afif azzuhri", "kevin kenzi al firmansyah", "muhaimin", "azuwa fatkur alkholif", "andi baskoro", "muhammad habibullah", "manto gumes", "ali mustopo", "sapin", "nur khalim", "isni", "tomi ramdani", "riki supendi", "sahid", "miftachul huda", "m. nasirudin", "sagiman", "sudadi", "supriyo susanto", "ardy ramadhani", "wagino", "diky handriansyah", "giono", "bayu istanto", "waelan", "hari kurniawan", "lilik supriyanto", "agung susilo", "ngadiman", "abdul rahman", "m. zaenuri", "ahmad hasinul fikqih", "jalal", "muhammad rikza rohmana", "samsuri", "nyaman", "taufik usman", "tumidjo", "gunawan", "wahab maulana ramadhan", "haikal aziz kurniawan", "ahmad tona", "sutomo", "setio purwanto", "tri tugas", "sutarman", "slamet harianto", "sumarno", "lukman wibowo. s", "iman wahyudi", "hariyono", "m. irfani", "andi sofyan", "ahmad priyanto", "hadi wagiman", "sigit widianto", "singgih adi putra", "mitro panut", "supri yanto", "paryono", "m. amin", "mustaqpirin", "khairudin", "khairul ilham", "sudirman", "sofyan ali syahbana", "arsy muhammad al habsy", "m. zaenuri", "ahmad hasinul fikqih", "jalal", "muhammad rikza rohmana", "samsuri", "nyaman", "taufik usman", "tumidjo", "gunawan", "wahab maulana ramadhan", "haikal aziz kurniawan", "ahmad tona", "sutomo", "setio purwanto", "tri tugas", "sutarman", "slamet harianto", "sumarno", "lukman wibowo. s", "iman wahyudi", "hariyono", "m. irfani", "andi sofyan", "ahmad priyanto", "hadi wagiman", "sigit widianto", "singgih adi putra", "mitro panut", "supri yanto", "paryono", "m. amin", "mustaqpirin", "khairudin", "khairul ilham", "sudirman", "sofyan ali syahbana", "arsy muhammad al habsy", "pangidoan", "safiq heryanto", "rahmat", "yunersen", "ahmad muttakin", "harisun", "hali maskur", "yusuf", "bukhori", "muhammad susanto", "anwar asnawi", "ali imron", "slamet nidun", "duwi a. fikri", "muhammad akbar rizan", "martono", "amat solekan", "iswadi", "paino", "abdul jalil", "abi gail", "turhadi", "alwan supangat", "sukirman", "m. tri ananta anugrah", "rajiman", "suparjo", "catur suroso", "abdul hamid", "sariman", "nafiudin", "budiman syahputra", "rakha fico efendi", "muji syukur", "fikri dwi susanto", "siswanto", "yuda aldiansyah", "sugianto", "deni primawan", "muhammad yusuf", "niwan", "mustofa", "somad susanto", "lamsyah purba", "abdul hanafi purba", "ibnu haris purba", "arif suesanto purba", "jubadi", "surya dwi syahputra", "jumali", "adi widjoyo", "munirul ikhwan", "ahmad farid", "abdi ahmad permadani", "sutrisno", "supriyadi", "al fathir rakha abyan", "herman", "akmal maulana teguh firmansyah", "galih setiawan dwi aldi hernanda", "ahmad sujono", "dion aldi setiawan", "teguh ramadhan", "nurokhmad ikhwandi", "muhammad fajri maulana", "suyatno", "hasan sidik", "maulana mujahid", "kasianto", "sutrisno", "roni setyawan", "slamet", "fahri al farisi", "sukarlan", "azi hendriansyah", "maulana koto", "suyatin", "ilyas rifa'i", "imron hakim", "mufli dzul abror", "kasno", "fajri solihin", "sutanto", "sobron", "andi nurudin", "rohimin", "hafid abiansyah", "suyitno", "ribut", "juliman", "m. sholikhim", "mujiono", "joko susilo", "makruf", "raditya alfarabi", "asmani", "pahrul ganjar sentioko", "khairul munawar", "agung satria putra", "rizky anwar", "paino", "teddy eriansyah", "wahyu redyansyah", "abu jamil", "suhendro", "rojakun", "napis imam zuhdi", "muhammad zaenal arifin", "sugianto", "supri", "sukarman", "abil fida", "ihsan alfaz", "sahlan ali", "suyudi", "fadli khoirul imam", "mursalin", "ade ibnu zacky", "siswanto", "kamaluddin", "adi putra", "legimin", "rizqi alfath", "wahino", "alan setiawan", "kadirin", "sorin", "pebri nurmansyah", "muhammad khoiron", "hasannudin", "mujiriyanto", "taufik hidayat", "irfan fauzi", "suparyanto", "rahmad abdan sakuro", "ahmad syaifudin damartyo", "daiman", "dani ari setiawan", "edy siswanto", "sunaryo", "hardi purnomo aji", "suyadi", "ali fahrudin", "amir mahdi", "sumono", "hafizd yudha pratama", "sarwo suwito", "mugi wiyono", "bambang. s", "davit sugiyanto", "fery efendi", "muhammat novrian", "juwarno", "gustian atma arnolis", "sevrialam bima arnolis", "umbul sumono", "ragil surya nendra", "suroto", "budi ribowo", "oky ganjar saputra", "imam chudori", "sefiyan dwi putra ardana", "supri", "annafi junprisa pratama", "suyanto", "muhammad aldi yansah", "iskandar", "nur aji prasetiyo", "nadrul muslim al walid", "nathan sakhy al ghani", "sangun", "tomo suwandi", "ismail", "ruhdi", "sholekhan", "muhammad irsyad", "henry berlian", "suyanto", "kasrun", "ali zakaria", "nurdin", "gavyn bara fahrezi athaya", "kainen", "ribowo arbi", "rino", "arya dava ananta", "sudarmono", "tantio wardi", "suhadi", "rendi prasetio", "jamal riskanto", "ahmad fadolli", "daud", "wahyu rio rinaldi", "ikhwan maulana", "irham junaidi", "ahmad bustami", "yusrianto", "murdiono", "beni ardani", "rizky rachmat dani", "maryono", "gumbrik", "ucok syahrudin", "mijan", "fiki wibowo", "agus triono", "sugiono", "arya yudatama", "aman supargi", "abdur rohman", "ahmad fahrudin", "abdul basyir", "fuad abdul hasan", "rahman", "putra pratama", "dwi prayogi", "rifky pradana", "mundakir", "wahid danang wijayanto", "mujahid", "ikbal maulana", "muhammad ibnu nasta' inu", "misni", "agung setio apriyanto", "ady putra", "salip", "sunarto", "pariyadi", "misman", "aldi nurdin trianto", "sumilan", "nurdin purnomo", "sulanggeng", "legimin", "indra kurniawan", "muhammad ilham", "ari kuswanto", "rafka danuarta", "selamet raharjo", "aldi wijaya", "junaidi", "supriyanto", "wahid akbar", "irwan alamsah damanik", "muhammad andriansyah damanik", "jumar", "hermawan", "mudarman", "muhammad dio abdilah", "wahyudi", "andreas aloysius noven setiawan", "slamet riadi", "rizki sulaimanda", "suwandi", "satriaman", "eko prastiyo", "m. irpan setyawan", "sudaryanto", "tri haryanto", "sarno", "rudi prastyo", "thamrin simamora", "dinar gihon simamora", "artha bisma simamora", "hari proklamanto simamora", "dedi supriadi", "riko ardiansah", "diski wayudiyansah", "karno", "ful manto", "susi anto", "sabar", "j. hardono. s", "pijor saut. s", "m. mariansyah. l. s", "tri putra sinaga", "wagiman", "wahyudi", "sumarno", "sapudin", "suherman", "eko susanto", "untung sudarwan", "norji wirandi", "arbi diansyah", "hendriyanto", "kevin asshadiq", "j. supartono", "rahmat sri asmono", "galih tri nugroho", "karisun", "muhamad izha bintang perdana", "muhamad dian bintang kusuma", "ro'is", "jamaludin", "darmawan", "aspuri", "hanif pratama", "riswanto", "rafan arza aditiya", "joyo miharjo", "mujiono", "toppiq setiawan", "tria fajar setiawan", "gesang ambar prastyo", "sutar", "suparman", "nabil fadhlun ramadhan", "nafis lahimul ilmi", "emrizal", "m. farhan hidayat", "rosid", "muhamad ihza fahrezi", "ahmad zaenudin", "abdul rohman", "abdul rohim", "marsudin", "arif ihwal yusmaliansyah", "ikhwanul al ma'ruf", "yahya marhamah", "alfian syaifullah", "arasya syaifullah", "sulistiono", "ridwan", "andika pratama", "poniman", "ayyub tri novrizal", "muslim", "rudy hermawan", "feri siswanto", "taufik hidayat", "sarmin", "galang alvinco", "ponijan", "andhika halim ardiansyah", "suherman", "muhammad ega bagas pratama", "jarwo pratitis", "paiman", "herman", "siyono", "muhammad rizki nurshena", "muhammad raka dwi agustiar", "kuniran", "fuad kurniawan", "umar said", "muhammad fatkur syaifullah", "muhammad hafitz syaifullah", "bejo utomo", "imam suhada", "rayhan abdul syukur", "ahmad fathir", "suyud", "muhamad latep", "mustakim", "muhyadi", "maniso", "eko sudarsono", "yogi dwi winarno", "sutopo", "febrian nugroho", "sukirlan", "muhammad ma'sum", "andra", "wagirin", "suyadi", "anto saputra", "bagas andrean", "prayitno", "dedi putra", "taufik hidayat", "muhsin", "rahmat arifudin", "m. ibnu hanif", "ikhsanudin al hakiki", "muhammad kholik", "muhammad dzaky maarif", "achmad subadi", "suparno", "rio tri hernawan", "slamet", "purwo hadi santoso", "dwi sudibyo", "johan trio prayogo", "sujarman", "ahmad rio cesar", "witono", "manap sawito", "supriyanto", "fajar shodiq", "mulyana", "suparno", "rio tri hernawan", "rasmo", "muhammad bayu andika kurniawan", "sungkono", "ryan edy saputra", "tarun", "girin", "muhammad trio febri", "sukarmin", "afian yudhistira", "daffa argana ibnu hafidz", "nasib", "dedi yanto", "sugeng rusdianto", "eko risnanto", "marwan", "budi hikmawan", "joko winanto", "revanno prasetyo", "tumiran", "sudarmono", "dedi sumantri", "dyas suratama", "sudin gunawan", "andri cahyono", "selamet haryadi", "dadang hermawan", "dicky junia. h", "samijo", "ricki meili arfian", "sucipto", "nursyamsi", "imam muttakin", "nurul hidayat", "edy purnomo", "muhamad khoirunisa. m", "sukandi"];

        // bill
        $bill = $request->price;
        $fee = $isCar ? 5000 : 2000;

        // format bill
        $nominal = number_format($bill + $fee - $discount, 0, "", ".");
        $fee = number_format($fee, 0, "", ".");
        $bill = number_format($bill, 0, "", ".");
        $discount = number_format($discount, 0, "", ".");

        // Trip Time Config
        $hh = (int)substr($hhmm, 0, 2);
        $mm = (int)substr($hhmm, 2, 2);

        $userTime = (($hh <= 12) ? $hh : ($hh - 12));
        $tripMax = $trip != 'C' ? 15 : 45;
        $timePrefix = $hh <= 12 ? 'AM' : 'PM';
        $time = fake()->numberBetween(9, $tripMax);
        $pickupTime = $userTime . ':' . $mm;
        $min = $mm + $time;
        $dropOffTime = (($min > 59) ? $userTime + 1 : $userTime) . ':' . (($min % 60) < 10 ? '0' : '') . ($min % 60);

        // set trip date
        $day = $ddmm == null ? fake()->numberBetween(1, 30) : substr($ddmm, 0, 2);
        $month = $ddmm == null ? fake()->numberBetween(1, 12)  : substr($ddmm, 2, 2);
        $date = date('j F Y', mktime(0, 0, 0, $month, $day));

        // kost to station
        $pickupA = ['Nasi Goreng Favorite G2 - Lengkong Gudang'];
        $dropOffA = ['Stasiun Rawa Buntu'];
        // station to office
        $pickupB = ['Grab Pickup Point Stasiun Palmerah Arah Senayan', 'Near RM Duwa Putra - Stasiun Palmerah', 'Jalan Tentara Pelajar', 'Pintu Arah Kebayoran Lama Halte Busway Stasiun Palmerah'];
        $dropOffB = ['Menara DEA Tower'];
        // office to station
        $pickupC = ['Menara DEA Tower'];
        $dropOffC = ['Stasiun Palmerah'];
        // station to kost
        $pickupD = ['Halte Rawa Buntu 1 Stasiun Rawa Buntu'];
        $dropOffD = ['Nasi Goreng Favorite G2 - Lengkong Gudang'];

        // generate route
        $pickup = '';
        $dropOff = '';
        $distance = 512 / 100;

        if ($trip == 'A') {
            $distance = fake()->numberBetween(360, 410) / 100;
            $pickup = fake()->randomElement($pickupA);
            $dropOff = fake()->randomElement($dropOffA);
        } elseif ($trip == 'B') {
            $distance = fake()->numberBetween(541, 580) / 100;
            $pickup = fake()->randomElement($pickupB);
            $dropOff = fake()->randomElement($dropOffB);
        } elseif ($trip == 'C') {
            $distance = fake()->numberBetween(541, 580) / 100;
            $pickup = fake()->randomElement($pickupC);
            $dropOff = fake()->randomElement($dropOffC);
        } elseif ($trip == 'D') {
            $distance = fake()->numberBetween(360, 410) / 100;
            $pickup = fake()->randomElement($pickupD);
            $dropOff = fake()->randomElement($dropOffD);
        }

        // Review
        $ran = fake()->numberBetween(1, 5);
        $reviewList = [
            'Layanan Mantap',
            'Bersih & Nyaman',
            'Pengemudi yang Suka Membantu',
            'Tahu Jalan Banget',
            'Ngobrolnya Seru'
        ];
        $review = $reviewList[$ran - 1];
        $icon = 'img/icon' . $ran . '.png';

        // generate driver name
        $driver = fake()->boolean() ? ucwords(fake()->randomElement($driverName)) : strtoupper(fake()->randomElement($driverName));

        // Addtional info
        $rating = number_format(fake()->numberBetween(46, 50) / 10, 1, ".", ".");
        $booking_code = $this->createSN($hh, $mm, $day, $month);

        return view('welcome', [
            'fee' => $fee,
            'icon' => $icon,
            'bill' => $bill,
            'date' => $date,
            'time' => $time,
            'timePrefix' => $timePrefix,
            'driver' => $driver,
            'review' => $review,
            'rating' => $rating,
            'pickup' => $pickup,
            'nominal' => $nominal,
            'dropoff' => $dropOff,
            'discount' => $discount,
            'distance' => $distance,
            'isDiscount' => $isDiscount,
            'pickuptime' => $pickupTime,
            'dropofftime' => $dropOffTime,
            'booking_code' => $booking_code,
        ]);
    }

    public function createSN($hour = 1, $min = 1, $day = 1, $month = 1)
    {
        $data = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        $random = fake()->numberBetween(2, 999);
        $e0 = 5;
        $e1 = $data[$month - 1];
        $e2 = $data[($day - 1) + fake()->numberBetween(0, 5)];
        $e3 = $data[($hour - 1) + fake()->numberBetween(0, 12)];
        $e4 = $data[($min % 24)];
        $e5 = fake()->randomElement($data);
        $e6 = fake()->randomElement($data);
        $e7 = fake()->randomElement($data);
        $e8 = fake()->randomElement($data);
        $e9 = fake()->randomElement($data);
        $e10 = fake()->randomElement($data);
        $e11 = fake()->randomElement($data);
        $result = $e0 . $e1 . $e2 . $e3 . $e4 . $e5 . $e6 . $e7 . $e8 . $e9 . $e10 . $e11;
        return $result;
    }
}
