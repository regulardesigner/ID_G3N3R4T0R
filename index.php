<?PHP
##################
#                #
#           ###  #
#           ###  #
#                #
#  ID_G3N3R4T0R  #
#                #
##################
#
# FAKE ID GENERATOR - INSPIRED BY GEOFFREY DORNE. URL : www.graphism.fr 
# be a fake persone on the web 
#
# tableau des noms et prénoms 
#
$fakeFirstNameMale = array("Adriel","Waneta","Chayton","Paco","Tadi","Waban","Yahto","Anoki","Bly","Patamon","Sahale","Wapi","Wakiza","Yancy","Chipata","Wapiti","Pako","Bento","Panko","Anaomy","Zyro","Nomai","Oroka","Yanpo","Solako","Willy");
$fakeFirstNameFemale = array("Abey","Abeytu","Ama","Bena","Chilali","Chimalis","Cholena","Chumani","Coahoma","Dena","Doli","Donoma","Dyani","Hateya","Huyana","Kaliska","Kiona","Kishi","Magena","Migina","Nita","Ozalee","Papina","Petunia","Sora","Yepa");
#$fakeLastName = array('' => ,);
$fakeFamillyName = array("aléoute","inuktitut","inuinnaqtun","inuktun","groenlandais","inuapitun","yupik","cri","montagnais","innu","naskapi","ojibwa","fox","chippewa","ottawa","delaware","abenaki","malécite","micmac","cheyenne","arapaho","béothuk","dobrig","chipewyan","yellowknife","sekani","sarsi","kaska","hupa","kuta","wailaki","mattole","tolowa","apache","kiowa","chiricahua","navaho","haisla","heiltsuk","etkwakiutl","makah","nootka","mohawk","oneida","seneca","cayuga","wyandot","cherokee","assiniboine","catawba","mandan","chiwere","iowa","dakota","lakota","st,oney","dhegiha","kansa","winnebago","mississippi","missouri","tutelo","tutelo","bella-coola","halkomelem","comox","pentlatch","sechelt","squamish","salish","lillooet","shuswap","Thompson","ntlakapamux","okanagan","nez-percé","tenino","umatilla","walla walla","yakima","gitxsan","niska","tsimshian","alabama","koasati","mikasuki","muskogee","chickasaw","choctaw","arikara","caddo","kitsai","pawnee","wichita","atakapa","chitimacha","natchez","tunica","luleibo","Wonka");
#
#print_r ($fakeFirstNameMale);
# print_r ($fakeFirstNameFemale);
#
#$theArray = $fakeFirstNameMale.length;
#
#
function theArrayRandomiser($theArray)
{
	# theArrayLenght compte les entrées du tableau,comme count() se trompe de 1 nous enlevons 1 à count 
	$theArrayLenght = count($theArray)-1;
	#
	# randCounter générer un nombre aléatoire entre 0 et le nombre max d'entrée du tableau 
	$randCounter = rand(0,$theArrayLenght);
	#return rand(0,$theArrayLenght);
	#
	# la function retour ne l'entrée stockée dans le tableau passé dans la fonction 
	return $theArray[$randCounter];
}
#
$FirstNameM = theArrayRandomiser($fakeFirstNameMale);
$secondNameM = theArrayRandomiser($fakeFirstNameMale);
$FirstNameF = theArrayRandomiser($fakeFirstNameFemale);
$secondNameF = theArrayRandomiser($fakeFirstNameFemale);
$familly = theArrayRandomiser($fakeFamillyName);
#
#
function possibilities($a,$b)
{
	$countA = count($a)-1;
	$countB = count($b)-1;
	#
	return $countA * $countA * $countB;
}
echo "<h1>G&eacute;n&eacute;rateur de fausses d&#x27;identit&eacute;es</h1>";
echo "<p><strong>Votre ID masculin est : </strong>".$FirstNameM."-".$secondNameM." ".$familly."</p>";
echo "<p><strong>Votre ID f&eacute;minin est : </strong>".$FirstNameF."-".$secondNameF." ".$familly."</p>";
echo "<p> This is your email adress : ".$FirstNameF."-".$secondNameF."-".$familly."@mailinator.com<p>";
echo "<small>Nombre d&#x27;ID masculin possible du g&eacute;n&eacute;rateur : ".possibilities($fakeFirstNameMale,$fakeFamillyName)."</small>";
echo "<br />";
echo "<small>Nombre d&#x27;ID feminin possible du g&eacute;n&eacute;rateur : ".possibilities($fakeFirstNameFemale,$fakeFamillyName)."</small>";
?>