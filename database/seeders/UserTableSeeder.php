<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'username' => 'admin@gmail.com',
            'email' => 'admin',
            'password' => bcrypt('password'),
        ]);

        $admin->assignRole('admin');

        $teachers = [
            [
                'name' => 'Siti Rahayu',
                'username' => 'siti-rahayu',
                'email' => 'sitirahayu@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Agus Setiawan',
                'username' => 'agus-setiawan',
                'email' => 'agussetiawan@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Dewi Susanti',
                'username' => 'dewi-susanti',
                'email' => 'dewi-susanti@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Joko Prabowo',
                'username' => 'joko-prabowo',
                'email' => 'joko-prabowo@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Rina Fitriani',
                'username' => 'rina-fitriani',
                'email' => 'rina-fitriani@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Irfan Hermawan',
                'username' => 'irfan-hermawan',
                'email' => 'irfan-hermawan@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Anisa Putri',
                'username' => 'anisa-putri',
                'email' => 'anisa-putri@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Rudi Santoso',
                'username' => 'rudi-santoso',
                'email' => 'rudi-santoso@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Maya Wati',
                'username' => 'maya-wati',
                'email' => 'maya-wati@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Hadi Susanto',
                'username' => 'hadi-susanto',
                'email' => 'hadi-susanto@gmail.com',
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($teachers as $key => $teacher) {
            User::create($teacher)->assignRole('teacher');
        }

        $students = [
            [
                'name' => 'ABIZAR KHAIRUL ANAM',
                'username' => '00012324',
                'email' => 'abizarkhairulanam@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'ACHSAN HUSAIN',
                'username' => '00022324',
                'email' => 'achsanhusain@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'ADIFA AZALINA PUTRI',
                'username' => '00032324',
                'email' => 'adifaazalinaputri@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AFRA NAYLA',
                'username' => '00042324',
                'email' => 'afranayla@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AHMAD FAUZAN',
                'username' => ' 00052324',
                'email' => 'ahmadfauzan@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AHMAD FHATIR',
                'username' => ' 00062324',
                'email' => 'ahmadfhatir@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AHMAD RIO SANJAYA TASMIN',
                'username' => '00072324',
                'email' => 'ahmadriosanjayatasmin@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AINUR SHANUM FELYSIA',
                'username' => '00082324',
                'email' => 'ainurshanumfelysia@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AISYA FARHANA',
                'username' => '00092324',
                'email' => 'aisyafarhana@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AISYAH SALSABILA',
                'username' => '00102324',
                'email' => 'aisyahsalsabila@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'ALIQA NAU URANA',
                'username' => '00112324',
                'email' => 'aliqanauurana@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'ARSYILA FARISA',
                'username' => '00122324',
                'email' => 'arsyilafarisa@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Hafiza Khaira Lubna',
                'username' => '00132324',
                'email' => 'hafizakhairalubna@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'HAFZAH LATIFAH. H',
                'username' => '00142324',
                'email' => 'hafzahlatifahh@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'IPA SASKIA RAHMA',
                'username' => '00152324',
                'email' => 'ipasaskiarahma@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'M. HUSAIN AZKA.B',
                'username' => '00162324',
                'email' => 'mhusainazkab@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MOH. ZAINI NAPO',
                'username' => '00232324',
                'email' => 'mohzaininapo@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH. ALL GIBRAN',
                'username' => '00172324',
                'email' => 'muhalligibran@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH. JIBRIL ALFIAN',
                'username' => '00182324',
                'email' => 'muhjibrilalfian@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH. ROBI',
                'username' => '00192324',
                'email' => 'muhrobi@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD FARID ATALLAH',
                'username' => '00202324',
                'email' => 'muhammadfaridatallah@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD NAIM',
                'username' => '00212324',
                'email' => 'muhammadnaim@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD SAFAAT',
                'username' => '00222324',
                'email' => 'muhammadsafaat@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'NUR AULIAH',
                'username' => '00242324',
                'email' => 'nurauliah@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'NUR AULYA',
                'username' => '00252324',
                'email' => 'nuraulya@gmail.com',
                'password' => bcrypt('password'),
            ],
            // Kelas 2
            [
                'name' => 'ABD. BASIT USMAN',
                'username' => '00012223',
                'email' => 'abdbastitusman@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AHMAD',
                'username' => '00022223',
                'email' => 'ahmad@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AHMAD ABIL AMRI',
                'username' => '00032223',
                'email' => 'ahmadabilamri@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AINUN NURAISYAH TASRIK',
                'username' => '00042223',
                'email' => 'ainunnuraisyahtasrik@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AISYAH NUGRAH',
                'username' => ' 00052223',
                'email' => 'aisyahnugrah@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AISYAH NURROHMAH',
                'username' => ' 00062223',
                'email' => 'aisyahnurrohman@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AUREL AINUN JARIA',
                'username' => '00072223',
                'email' => 'aurelainunjaria@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'DZAKY ALMAIR JAMIL YUSRI',
                'username' => '00082223',
                'email' => 'dzakyalmairjamilyusril@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'HANIF ABBAD',
                'username' => '00092223',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'M. ABID MUBARAK',
                'username' => '00122223',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MASITA',
                'username' => '00102223',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MOH. ARYENDRA PUTRA TINOMBALA',
                'username' => '00112223',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH. ABISAR',
                'username' => '00132223',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH. ABQA ALAN',
                'username' => '00142223',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH. APRIAKZA MAULANA',
                'username' => '00152223',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH. FIRMANSYAH',
                'username' => '00182223',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH. KHAIRUL',
                'username' => '00192223',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH. ZULFADHLI',
                'username' => '00202223',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD AIDHIL AL KAHFI',
                'username' => '00162223',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD FILI MUTTAQIN',
                'username' => '00172223',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'NAJWA KHAIRA WILDA',
                'username' => '00212223',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'NAYZILA AZZAHRA',
                'username' => '00222223',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'SITI FATIMAH',
                'username' => '00232223',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'TITA NURHALIMA',
                'username' => '00222122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'ZYINDI AMELIA. A',
                'username' => '00242223',
                'password' => bcrypt('password'),
            ],
            // Kelas 3
            [
                'name' => 'AFWANY',
                'username' => '00022122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AHMAD FAI MUHSIN',
                'username' => '00012122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AHMAD FARIS',
                'username' => '00032122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AINUN HABIBI',
                'username' => '00042122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'ALFAR TSABIT AL-QEIS',
                'username' => '00052122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'ARIFATUL ROHMAH',
                'username' => '00062122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'FADHLIAH',
                'username' => '00072122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'HAJRA',
                'username' => '00092122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'HUMAIRAH',
                'username' => '00102122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH. WAVIQ',
                'username' => '00122122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH.ZAKI ARDANI',
                'username' => '00132122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD ABILAL',
                'username' => '23240026',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD FAHRIL',
                'username' => '00112122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'NUR ADILA PUTRI',
                'username' => '00152122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'NUR HAZANA',
                'username' => '00172122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'NUR HAZINA AMILA',
                'username' => '00162122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'NURAMYLA ZAHRA',
                'username' => '00142122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'PUTRI ANRIANI TASRIF',
                'username' => '00182122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'PUTRI NOER NAJWA',
                'username' => '00192122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'SALSA BYLAH',
                'username' => '00202122',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'SHAFINA ZAHIRA TAFSIR',
                'username' => '00212122',
                'password' => bcrypt('password'),
            ],
            // Kelas 4
            [
                'name' => 'AHMAD AL GIBRAN',
                'username' => '00012021',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AYYUB ARDIANSYAPUTRA',
                'username' => '00022021',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'CAHAYA MUNIFA',
                'username' => '00152021',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'FAREL ALFARIZI',
                'username' => '00032021',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'FATIHA MAISYARAH',
                'username' => '00042021',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'FIKRY',
                'username' => '00052021',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'IFFA UFAIRA',
                'username' => '22230025',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'M. GHAZALI',
                'username' => '00062021',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUFIDA SALSABILA',
                'username' => '00072021',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH.AINUR ROYAN',
                'username' => '00082021',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD KHIAR ALTAAF MUFASA',
                'username' => '21220025',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD SIKRA',
                'username' => '00092021',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD SYIAR',
                'username' => '00102021',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'NAUFAL ALGIFHARI YUSRI',
                'username' => '22230026',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Nur Fitrih',
                'username' => '21220026',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'RAIDA FAKHIRA',
                'username' => '00122021',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'RESKI AMELIA',
                'username' => '00132021',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'USWATUL ILMI',
                'username' => '00142021',
                'password' => bcrypt('password'),
            ],
            // Kelas 5
            [
                'name' => 'ABDUL AHMAD JAYAH',
                'username' => '21220029',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AHMAD FADLAN',
                'username' => '00021920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AHMAD FUDAIL',
                'username' => '23240027',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AHMAD MIZWAR',
                'username' => '00031920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'ALEA ZANAYA',
                'username' => '00041920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'ALIN SYAPUTRA',
                'username' => '00051920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'ANITA',
                'username' => '00061920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AQILAH QARIMAH',
                'username' => '00071920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Atiqa Naila',
                'username' => '22230027',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AYU WARDAH SOFIA ABUBAKAR',
                'username' => '00081920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'CAHAYA FADILAH',
                'username' => '00091920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Dwi Maulidia Rabbani',
                'username' => '20210017',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'FADILA',
                'username' => '00101920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'LUTFI ZAHRAWI',
                'username' => '00111920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'M.ALFAN NURUL IHCSAN',
                'username' => '00121920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'M.RASMAN AL RISQI',
                'username' => '00131920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MOH.TAHIR NAPO',
                'username' => '00141920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH ADAM',
                'username' => '00161920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH. FADHLIN',
                'username' => '00181920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH.AHLIF',
                'username' => '00171920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD ABRAHAM AL BIRRU',
                'username' => '00151920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD ALIM',
                'username' => '00191920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD ATHARIZZ CALIEF',
                'username' => '21220024',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD FADHIL',
                'username' => '00201920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD HIKMAH',
                'username' => '00211920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD SHAFWAN',
                'username' => '00221920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUNAWARA',
                'username' => '00231920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'NUR ANNISIYA',
                'username' => '00241920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'NUR HAURA NATIFAH',
                'username' => '00251920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'NUR SISKA AULIA',
                'username' => '00261920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'NURUL AZZAHRA',
                'username' => '00271920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'QEYLA PUTRI RAMADHANY',
                'username' => '00281920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Risky Aditia',
                'username' => '00291920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'SALSABILAH',
                'username' => '00301920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'ZAHRA JANUARI LESTARI',
                'username' => '00311920',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'ZAKI HUSAIN',
                'username' => '00321920',
                'password' => bcrypt('password'),
            ],
            // Kelas 6
            [
                'name' => 'ABD.RAHMAN',
                'username' => '00011819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AHMAD FAHRIZIQ',
                'username' => ' 00021819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AHMAD FAUZAN',
                'username' => '00031819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AKSAN',
                'username' => '00041819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AMALIA SALSA BILA',
                'username' => '00051819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'AMISYA PUTRI',
                'username' => '00061819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'ARIF SAPUTRA',
                'username' => '00071819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'CITRA',
                'username' => '00081819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'FAHRUDDIN',
                'username' => '00091819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'FEBRIANTI',
                'username' => '00101819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'FITRIANI',
                'username' => '00111819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'LATHIFAH KAMILAH',
                'username' => '00121819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'M. MAULANA',
                'username' => '00151718',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'M.UBAI ABDILLAH',
                'username' => '00131819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MARWAH FADILA',
                'username' => '00141819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MELISA ZALZABILA WAHAB',
                'username' => '00151819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MILAD SYARWAN NUR',
                'username' => '00161819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Muh. Nizam Habibi',
                'username' => '21220028',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH. QHALBUN SALIM',
                'username' => '00211819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH. REZA',
                'username' => '00221819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH.ALWI AKHSAN',
                'username' => '00171819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH.ARJIDAN',
                'username' => '00181819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH.AYMAN AMIRUL',
                'username' => '00191819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUH.NAESAR',
                'username' => '00201819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD ALFIAN',
                'username' => '00231819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MUHAMMAD ARIF REZKY',
                'username' => '00101718',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Muhammad Yusuf Murdiansyah',
                'username' => '21220030',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MULIAWAN RAMADANI',
                'username' => '00241819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MURSALIM',
                'username' => '00251819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'MURSALIM',
                'username' => '00261819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'NAPIA NURHIDAYAH SAHRUL',
                'username' => '00271819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'NUR LATHIFA',
                'username' => '00281819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'NURMADANI',
                'username' => '00291819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'NURUL FAUZIAH',
                'username' => '00301819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'RAHMA FAUZIAH',
                'username' => '00311819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'RESKI ZALSABILA',
                'username' => '00321819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'ZAHRA MUTIARA',
                'username' => '00331819',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'ZYIFA CAHYA.A',
                'username' => '00341819',
                'password' => bcrypt('password'),
            ],

        ];

        foreach ($students as $key => $student) {
            User::create($student)->assignRole('student');
        }


    }
}
