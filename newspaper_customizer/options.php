<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */ 
function optionsframework_option_name() {
	// Change this to use your theme slug
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	return $themename;
}
/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'skt-newspaper'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */
function optionsframework_options() {
	//array of all custom font types.
	$font_types = array( '' => '',
		'ABeeZee' => 'ABeeZee',
		'Abel' => 'Abel',
		'Abril Fatface' => 'Abril Fatface',
		'Aclonica' => 'Aclonica',
		'Acme' => 'Acme',
		'Actor' => 'Actor',
		'Adamina' => 'Adamina',
		'Advent Pro' => 'Advent Pro',
		'Aguafina Script' => 'Aguafina Script',
		'Akronim' => 'Akronim',
		'Aladin' => 'Aladin',
		'Aldrich' => 'Aldrich',
		'Alegreya' => 'Alegreya',
		'Alegreya Sans SC' => 'Alegreya Sans SC',
		'Alegreya SC' => 'Alegreya SC',
		'Alex Brush' => 'Alex Brush',
		'Alef' => 'Alef',
		'Alfa Slab One' => 'Alfa Slab One',
		'Alice' => 'Alice',
		'Alike' => 'Alike',
		'Alike Angular' => 'Alike Angular',
		'Allan' => 'Allan',
		'Allerta' => 'Allerta',
		'Allerta Stencil' => 'Allerta Stencil',
		'Allura' => 'Allura',
		'Almendra' => 'Almendra',
		'Almendra Display' => 'Almendra Display',
		'Almendra SC' => 'Almendra SC',
		'Amiri' => 'Amiri',
		'Amarante' => 'Amarante',
		'Amaranth' => 'Amaranth',
		'Amatic SC' => 'Amatic SC',
		'Amethysta' => 'Amethysta',
		'Amita' => 'Amita',
		'Anaheim' => 'Anaheim',
		'Andada' => 'Andada',
		'Andika' => 'Andika',
		'Annie Use Your Telescope' => 'Annie Use Your Telescope',
		'Anonymous Pro' => 'Anonymous Pro',
		'Antic' => 'Antic',
		'Antic Didone' => 'Antic Didone',
		'Antic Slab' => 'Antic Slab',
		'Anton' => 'Anton',
		'Angkor' => 'Angkor',
		'Arapey' => 'Arapey',
		'Arbutus' => 'Arbutus',
		'Arbutus Slab' => 'Arbutus Slab',
		'Architects Daughter' => 'Architects Daughter',
		'Archivo White' => 'Archivo White',
		'Archivo Narrow' => 'Archivo Narrow',
		'Arial' => 'Arial',
		'Arimo' => 'Arimo',
		'Arya' => 'Arya',
		'Arizonia' => 'Arizonia',
		'Armata' => 'Armata',
		'Artifika' => 'Artifika',
		'Arvo' => 'Arvo',
		'Asar' => 'Asar',
		'Asap' => 'Asap',
		'Asset' => 'Asset',
		'Astloch' => 'Astloch',
		'Asul' => 'Asul',
		'Atomic Age' => 'Atomic Age',
		'Aubrey' => 'Aubrey',
		'Audiowide' => 'Audiowide',
		'Autour One' => 'Autour One',
		'Average' => 'Average',
		'Average Sans' => 'Average Sans',
		'Averia Gruesa Libre' => 'Averia Gruesa Libre',
		'Averia Libre' => 'Averia Libre',
		'Averia Sans Libre' => 'Averia Sans Libre',
		'Averia Serif Libre' => 'Averia Serif Libre',
		'Battambang' => 'Battambang',
		'Bad Script' => 'Bad Script',
		'Bayon' => 'Bayon',
		'Balthazar' => 'Balthazar',
		'Bangers' => 'Bangers',
		'Basic' => 'Basic',
		'Baumans' => 'Baumans',
		'Belgrano' => 'Belgrano',
		'Belleza' => 'Belleza',
		'BenchNine' => 'BenchNine',
		'Bentham' => 'Bentham',
		'Berkshire Swash' => 'Berkshire Swash',
		'Bevan' => 'Bevan',
		'Bigelow Rules' => 'Bigelow Rules',
		'Bigshot One' => 'Bigshot One',
		'Bilbo' => 'Bilbo',
		'Bilbo Swash Caps' => 'Bilbo Swash Caps',
		'Biryani' => 'Biryani',
		'Bitter' => 'Bitter',
		'White Ops One' => 'White Ops One',
		'Bokor' => 'Bokor',
		'Bonbon' => 'Bonbon',
		'Boogaloo' => 'Boogaloo',
		'Bowlby One' => 'Bowlby One',
		'Bowlby One SC' => 'Bowlby One SC',
		'Brawler' => 'Brawler',
		'Bree Serif' => 'Bree Serif',
		'Bubblegum Sans' => 'Bubblegum Sans',
		'Bubbler One' => 'Bubbler One',
		'Buda' => 'Buda',
		'Buenard' => 'Buenard',
		'Butcherman' => 'Butcherman',
		'Butcherman Caps' => 'Butcherman Caps',
		'Butterfly Kids' => 'Butterfly Kids',
		'Cabin' => 'Cabin',
		'Cabin Condensed' => 'Cabin Condensed',
		'Cabin Sketch' => 'Cabin Sketch',
		'Cabin' => 'Cabin',
		'Caesar Dressing' => 'Caesar Dressing',
		'Cagliostro' => 'Cagliostro',
		'Calligraffitti' => 'Calligraffitti',
		'Cambay' => 'Cambay',
		'Cambo' => 'Cambo',
		'Candal' => 'Candal',
		'Cantarell' => 'Cantarell',
		'Cantata One' => 'Cantata One',
		'Cantora One' => 'Cantora One',
		'Capriola' => 'Capriola',
		'Cardo' => 'Cardo',
		'Carme' => 'Carme',
		'Carrois Gothic' => 'Carrois Gothic',
		'Carrois Gothic SC' => 'Carrois Gothic SC',
		'Carter One' => 'Carter One',
		'Caveat' => 'Caveat',
		'Caveat Brush' => 'Caveat Brush',
		'Catamaran' => 'Catamaran',
		'Caudex' => 'Caudex',
		'Cedarville Cursive' => 'Cedarville Cursive',
		'Ceviche One' => 'Ceviche One',
		'Changa One' => 'Changa One',
		'Chango' => 'Chango',
		'Chau Philomene One' => 'Chau Philomene One',
		'Chenla' => 'Chenla',
		'Chela One' => 'Chela One',
		'Chelsea Market' => 'Chelsea Market',
		'Cherry Cream Soda' => 'Cherry Cream Soda',
		'Cherry Swash' => 'Cherry Swash',
		'Chewy' => 'Chewy',
		'Chicle' => 'Chicle',
		'Chivo' => 'Chivo',
		'Chonburi' => 'Chonburi',
		'Cinzel' => 'Cinzel',
		'Cinzel Decorative' => 'Cinzel Decorative',
		'Clicker Script' => 'Clicker Script',
		'Coda' => 'Coda',
		'Codystar' => 'Codystar',
		'Combo' => 'Combo',
		'Comfortaa' => 'Comfortaa',
		'Coming Soon' => 'Coming Soon',
		'Condiment' => 'Condiment',
		'Content' => 'Content',
		'Contrail One' => 'Contrail One',
		'Convergence' => 'Convergence',
		'Cookie' => 'Cookie',
		'Comic Sans MS' => 'Comic Sans MS',
		'Copse' => 'Copse',
		'Corben' => 'Corben',
		'Courgette' => 'Courgette',
		'Cousine' => 'Cousine',
		'Coustard' => 'Coustard',
		'Covered By Your Grace' => 'Covered By Your Grace',
		'Crafty Girls' => 'Crafty Girls',
		'Creepster' => 'Creepster',
		'Creepster Caps' => 'Creepster Caps',
		'Crete Round' => 'Crete Round',
		'Crimson' => 'Crimson',
		'Croissant One' => 'Croissant One',
		'Crushed' => 'Crushed',
		'Cuprum' => 'Cuprum',
		'Cutive' => 'Cutive',
		'Cutive Mono' => 'Cutive Mono',
		'Damion' => 'Damion',
		'Dangrek' => 'Dangrek',
		'Dancing Script' => 'Dancing Script',
		'Dawning of a New Day' => 'Dawning of a New Day',
		'Days One' => 'Days One',
		'Dekko' => 'Dekko',
		'Delius' => 'Delius',
		'Delius Swash Caps' => 'Delius Swash Caps',
		'Delius Unicase' => 'Delius Unicase',
		'Della Respira' => 'Della Respira',
		'Denk One' => 'Denk One',
		'Devonshire' => 'Devonshire',
		'Dhurjati' => 'Dhurjati',
		'Didact Gothic' => 'Didact Gothic',
		'Diplomata' => 'Diplomata',
		'Diplomata SC' => 'Diplomata SC',
		'Domine' => 'Domine',
		'Donegal One' => 'Donegal One',
		'Doppio One' => 'Doppio One',
		'Dorsa' => 'Dorsa',
		'Dosis' => 'Dosis',
		'Dr Sugiyama' => 'Dr Sugiyama',
		'Droid Sans' => 'Droid Sans',
		'Droid Sans Mono' => 'Droid Sans Mono',
		'Droid Serif' => 'Droid Serif',
		'Duru Sans' => 'Duru Sans',
		'Dynalight' => 'Dynalight',
		'EB Garamond' => 'EB Garamond',
		'Eczar' => 'Eczar',
		'Eagle Lake' => 'Eagle Lake',
		'Eater' => 'Eater',
		'Eater Caps' => 'Eater Caps',
		'Economica' => 'Economica',
		'Ek Mukta' => 'Ek Mukta',
		'Electrolize' => 'Electrolize',
		'Elsie' => 'Elsie',
		'Elsie Swash Caps' => 'Elsie Swash Caps',
		'Emblema One' => 'Emblema One',
		'Emilys Candy' => 'Emilys Candy',
		'Engagement' => 'Engagement',
		'Englebert' => 'Englebert',
		'Enriqueta' => 'Enriqueta',
		'Erica One' => 'Erica One',
		'Esteban' => 'Esteban',
		'Euphoria Script' => 'Euphoria Script',
		'Ewert' => 'Ewert',
		'Exo' => 'Exo',
		'Exo 2' => 'Exo 2',
		'Expletus Sans' => 'Expletus Sans',
		'Fanwood Text' => 'Fanwood Text',
		'Fascinate' => 'Fascinate',
		'Fascinate Inline' => 'Fascinate Inline',
		'Fasthand' => 'Fasthand',
		'Faster One' => 'Faster One',
		'Federant' => 'Federant',
		'Federo' => 'Federo',
		'Felipa' => 'Felipa',
		'Fenix' => 'Fenix',
		'Finger Paint' => 'Finger Paint',
		'Fira Mono' => 'Fira Mono',
		'Fira Sans' => 'Fira Sans',
		'Fjalla One' => 'Fjalla One',
		'Fjord One' => 'Fjord One',
		'Flamenco' => 'Flamenco',
		'Flavors' => 'Flavors',
		'Fondamento' => 'Fondamento',
		'Fontdiner Swanky' => 'Fontdiner Swanky',
		'Forum' => 'Forum',
		'Francois One' => 'Francois One',
		'FreeSans' => 'FreeSans',
		'Freckle Face' => 'Freckle Face',
		'Fredericka the Great' => 'Fredericka the Great',
		'Fredoka One' => 'Fredoka One',
		'Fresca' => 'Fresca',
		'Freehand' => 'Freehand',
		'Frijole' => 'Frijole',
		'Fruktur' => 'Fruktur',
		'Fugaz One' => 'Fugaz One',
		'Gafata' => 'Gafata',
		'Galdeano' => 'Galdeano',
		'Galindo' => 'Galindo',
		'Gentium Basic' => 'Gentium Basic',
		'Gentium Book Basic' => 'Gentium Book Basic',
		'Geo' => 'Geo',
		'Georgia' => 'Georgia',
		'Geostar' => 'Geostar',
		'Geostar Fill' => 'Geostar Fill',
		'Germania One' => 'Germania One',
		'Gilda Display' => 'Gilda Display',
		'Give You Glory' => 'Give You Glory',
		'Glass Antiqua' => 'Glass Antiqua',
		'Glegoo' => 'Glegoo',
		'Gloria Hallelujah' => 'Gloria Hallelujah',
		'Goblin One' => 'Goblin One',
		'Gochi Hand' => 'Gochi Hand',
		'Gorditas' => 'Gorditas',
		'Gurajada' => 'Gurajada',
		'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
		'Graduate' => 'Graduate',
		'Grand Hotel' => 'Grand Hotel',
		'Gravitas One' => 'Gravitas One',
		'Great Vibes' => 'Great Vibes',
		'Griffy' => 'Griffy',
		'Gruppo' => 'Gruppo',
		'Gudea' => 'Gudea',
		'Gidugu' => 'Gidugu',
		'GFS Didot' => 'GFS Didot',
		'GFS Neohellenic' => 'GFS Neohellenic',
		'Habibi' => 'Habibi',
		'Hammersmith One' => 'Hammersmith One',
		'Halant' => 'Halant',
		'Hanalei' => 'Hanalei',
		'Hanalei Fill' => 'Hanalei Fill',
		'Handlee' => 'Handlee',
		'Hanuman' => 'Hanuman',
		'Happy Monkey' => 'Happy Monkey',
		'Headland One' => 'Headland One',
		'Henny Penny' => 'Henny Penny',
		'Herr Von Muellerhoff' => 'Herr Von Muellerhoff',
		'Hind' => 'Hind',
		'Hind Siliguri' => 'Hind Siliguri',
		'Hind Vadodara' => 'Hind Vadodara',
		'Holtwood One SC' => 'Holtwood One SC',
		'Homemade Apple' => 'Homemade Apple',
		'Homenaje' => 'Homenaje',
		'IM Fell' => 'IM Fell',
		'Itim' => 'Itim',
		'Iceberg' => 'Iceberg',
		'Iceland' => 'Iceland',
		'Imprima' => 'Imprima',
		'Inconsolata' => 'Inconsolata',
		'Inder' => 'Inder',
		'Indie Flower' => 'Indie Flower',
		'Inknut Antiqua' => 'Inknut Antiqua',
		'Inika' => 'Inika',
		'Irish Growler' => 'Irish Growler',
		'Istok Web' => 'Istok Web',
		'Italiana' => 'Italiana',
		'Italianno' => 'Italianno',
		'Jacques Francois' => 'Jacques Francois',
		'Jacques Francois Shadow' => 'Jacques Francois Shadow',
		'Jim Nightshade' => 'Jim Nightshade',
		'Jockey One' => 'Jockey One',
		'Jaldi' => 'Jaldi',
		'Jolly Lodger' => 'Jolly Lodger',
		'Josefin Sans' => 'Josefin Sans',
		'Josefin Sans' => 'Josefin Sans',
		'Josefin Slab' => 'Josefin Slab',
		'Joti One' => 'Joti One',
		'Judson' => 'Judson',
		'Julee' => 'Julee',
		'Julius Sans One' => 'Julius Sans One',
		'Junge' => 'Junge',
		'Jura' => 'Jura',
		'Just Another Hand' => 'Just Another Hand',
		'Just Me Again Down Here' => 'Just Me Again Down Here',
		'Kadwa' => 'Kadwa',
		'Kdam Thmor' => 'Kdam Thmor',
		'Kalam' => 'Kalam', 
		'Kameron' => 'Kameron',
		'Kantumruy' => 'Kantumruy',
		'Karma' => 'Karma',
		'Karla' => 'Karla',
		'Kaushan Script' => 'Kaushan Script',
		'Kavoon' => 'Kavoon',
		'Keania One' => 'Keania One',
		'Kelly Slab' => 'Kelly Slab',
		'Kenia' => 'Kenia',
		'Khand' => 'Khand',
		'Khmer' => 'Khmer',
		'Khula' => 'Khula',
		'Kite One' => 'Kite One',
		'Knewave' => 'Knewave',
		'Kotta One' => 'Kotta One',
		'Kranky' => 'Kranky',
		'Kreon' => 'Kreon',
		'Kristi' => 'Kristi',
		'Koulen' => 'Koulen',
		'Krona One' => 'Krona One',
		'Kurale' => 'Kurale',
		'Lakki Reddy' => 'Lakki Reddy',
		'La Belle Aurore' => 'La Belle Aurore',
		'Lancelot' => 'Lancelot',
		'Laila' => 'Laila',
		'Lato' => 'Lato',
		'Lateef' => 'Lateef',
		'League Script' => 'League Script',
		'Leckerli One' => 'Leckerli One',
		'Ledger' => 'Ledger',
		'Lekton' => 'Lekton',
		'Lemon' => 'Lemon',
		'Libre Baskerville' => 'Libre Baskerville',
		'Life Savers' => 'Life Savers',
		'Lilita One' => 'Lilita One',
		'Limelight' => 'Limelight',
		'Linden Hill' => 'Linden Hill',
		'Lobster' => 'Lobster',
		'Lobster Two' => 'Lobster Two',
		'Londrina Outline' => 'Londrina Outline',
		'Londrina Shadow' => 'Londrina Shadow',
		'Londrina Sketch' => 'Londrina Sketch',
		'Londrina Solid' => 'Londrina Solid',
		'Lora' => 'Lora',
		'Love Ya Like A Sister' => 'Love Ya Like A Sister',
		'Loved by the King' => 'Loved by the King',
		'Lovers Quarrel' => 'Lovers Quarrel',
		'Lucida Sans Unicode' => 'Lucida Sans Unicode',
		'Luckiest Guy' => 'Luckiest Guy',
		'Lusitana' => 'Lusitana',
		'Lustria' => 'Lustria',
		'Macondo' => 'Macondo',
		'Macondo Swash Caps' => 'Macondo Swash Caps',
		'Magra' => 'Magra',
		'Maiden Orange' => 'Maiden Orange',
		'Mallanna' => 'Mallanna',
		'Mandali' => 'Mandali',
		'Mako' => 'Mako',
		'Marcellus' => 'Marcellus',
		'Marcellus SC' => 'Marcellus SC',
		'Marck Script' => 'Marck Script',
		'Margarine' => 'Margarine',
		'Marko One' => 'Marko One',
		'Marmelad' => 'Marmelad',
		'Marvel' => 'Marvel',
		'Martel' => 'Martel',
		'Martel Sans' => 'Martel Sans',
		'Mate' => 'Mate',
		'Mate SC' => 'Mate SC',
		'Maven Pro' => 'Maven Pro',
		'McLaren' => 'McLaren',
		'Meddon' => 'Meddon',
		'MedievalSharp' => 'MedievalSharp',
		'Medula One' => 'Medula One',
		'Megrim' => 'Megrim',
		'Meie Script' => 'Meie Script',
		'Merienda' => 'Merienda',
		'Merienda One' => 'Merienda One',
		'Merriweather' => 'Merriweather',
		'Metal' => 'Metal',
		'Metal Mania' => 'Metal Mania',
		'Metamorphous' => 'Metamorphous',
		'Metrophobic' => 'Metrophobic',
		'Michroma' => 'Michroma',
		'Milonga' => 'Milonga',
		'Miltonian' => 'Miltonian',
		'Miltonian Tattoo' => 'Miltonian Tattoo',
		'Miniver' => 'Miniver',
		'Miss Fajardose' => 'Miss Fajardose',
		'Miss Saint Delafield' => 'Miss Saint Delafield',
		'Modak' => 'Modak',
		'Modern Antiqua' => 'Modern Antiqua',
		'Molengo' => 'Molengo',
		'Molle' => 'Molle',
		'Moulpali' => 'Moulpali',
		'Monda' => 'Monda',
		'Monofett' => 'Monofett',
		'Monoton' => 'Monoton',
		'Monsieur La Doulaise' => 'Monsieur La Doulaise',
		'Montaga' => 'Montaga',
		'Montez' => 'Montez',
		'Montserrat' => 'Montserrat',
		'Montserrat Alternates' => 'Montserrat Alternates',
		'Montserrat Subrayada' => 'Montserrat Subrayada',
		'Mountains of Christmas' => 'Mountains of Christmas',
		'Mouse Memoirs' => 'Mouse Memoirs',
		'Moul' => 'Moul',
		'Mr Bedford' => 'Mr Bedford',
		'Mr Bedfort' => 'Mr Bedfort',
		'Mr Dafoe' => 'Mr Dafoe',
		'Mr De Haviland' => 'Mr De Haviland',
		'Mrs Saint Delafield' => 'Mrs Saint Delafield',
		'Mrs Sheppards' => 'Mrs Sheppards',
		'Muli' => 'Muli',
		'Mystery Quest' => 'Mystery Quest',
		'Neucha' => 'Neucha',
		'Neuton' => 'Neuton',
		'New Rocker' => 'New Rocker',
		'News Cycle' => 'News Cycle',
		'Niconne' => 'Niconne',
		'Nixie One' => 'Nixie One',
		'Nobile' => 'Nobile',
		'Nokora' => 'Nokora',
		'Norican' => 'Norican',
		'Nosifer' => 'Nosifer',
		'Nosifer Caps' => 'Nosifer Caps',
		'Nova Mono' => 'Nova Mono',
		'Noticia Text' => 'Noticia Text',
		'Noto Sans' => 'Noto Sans',
		'Noto Serif' => 'Noto Serif',
		'Nova Round' => 'Nova Round',
		'Numans' => 'Numans',
		'Nunito' => 'Nunito',
		'NTR' => 'NTR',
		'Offside' => 'Offside',
		'Oldenburg' => 'Oldenburg',
		'Oleo Script' => 'Oleo Script',
		'Oleo Script Swash Caps' => 'Oleo Script Swash Caps',
		'Open Sans' => 'Open Sans',
		'Open Sans Condensed' => 'Open Sans Condensed',
		'Oranienbaum' => 'Oranienbaum',
		'Orbitron' => 'Orbitron',
		'Odor Mean Chey' => 'Odor Mean Chey',
		'Oregano' => 'Oregano',
		'Orienta' => 'Orienta',
		'Original Surfer' => 'Original Surfer',
		'Oswald' => 'Oswald',
		'Over the Rainbow' => 'Over the Rainbow',
		'Overlock' => 'Overlock',
		'Overlock SC' => 'Overlock SC',
		'Ovo' => 'Ovo',
		'Oxygen' => 'Oxygen',
		'Oxygen Mono' => 'Oxygen Mono',
		'Palanquin Dark' => 'Palanquin Dark',
		'Peddana' => 'Peddana',
		'Poppins' => 'Poppins',
		'PT Mono' => 'PT Mono',
		'PT Sans' => 'PT Sans',
		'PT Sans Caption' => 'PT Sans Caption',
		'PT Sans Narrow' => 'PT Sans Narrow',
		'PT Serif' => 'PT Serif',
		'PT Serif Caption' => 'PT Serif Caption',
		'Pacifico' => 'Pacifico',
		'Paprika' => 'Paprika',
		'Parisienne' => 'Parisienne',
		'Passero One' => 'Passero One',
		'Passion One' => 'Passion One',
		'Patrick Hand' => 'Patrick Hand',
		'Patrick Hand SC' => 'Patrick Hand SC',
		'Patua One' => 'Patua One',
		'Paytone One' => 'Paytone One',
		'Peralta' => 'Peralta',
		'Permanent Marker' => 'Permanent Marker',
		'Petit Formal Script' => 'Petit Formal Script',
		'Petrona' => 'Petrona',
		'Philosopher' => 'Philosopher',
		'Piedra' => 'Piedra',
		'Pinyon Script' => 'Pinyon Script',
		'Pirata One' => 'Pirata One',
		'Plaster' => 'Plaster',
		'Palatino Linotype' => 'Palatino Linotype',
		'Play' => 'Play',
		'Playball' => 'Playball',
		'Playfair Display' => 'Playfair Display',
		'Playfair Display SC' => 'Playfair Display SC',
		'Podkova' => 'Podkova',
		'Poiret One' => 'Poiret One',
		'Poller One' => 'Poller One',
		'Poly' => 'Poly',
		'Pompiere' => 'Pompiere',
		'Pontano Sans' => 'Pontano Sans',
		'Port Lligat Sans' => 'Port Lligat Sans',
		'Port Lligat Slab' => 'Port Lligat Slab',
		'Prata' => 'Prata',
		'Pragati Narrow' => 'Pragati Narrow',
		'Preahvihear' => 'Preahvihear',
		'Press Start 2P' => 'Press Start 2P',
		'Princess Sofia' => 'Princess Sofia',
		'Prociono' => 'Prociono',
		'Prosto One' => 'Prosto One',
		'Puritan' => 'Puritan',
		'Purple Purse' => 'Purple Purse',
		'Quando' => 'Quando',
		'Quantico' => 'Quantico',
		'Quattrocento' => 'Quattrocento',
		'Quattrocento Sans' => 'Quattrocento Sans',
		'Questrial' => 'Questrial',
		'Quicksand' => 'Quicksand',
		'Quintessential' => 'Quintessential',
		'Qwigley' => 'Qwigley',
		'Racing Sans One' => 'Racing Sans One',
		'Radley' => 'Radley',
		'Rajdhani' => 'Rajdhani',
		'Raleway Dots' => 'Raleway Dots',
		'Raleway' => 'Raleway',
		'Rambla' => 'Rambla',
		'Ramabhadra' => 'Ramabhadra',
		'Ramaraja' => 'Ramaraja',
		'Rammetto One' => 'Rammetto One',
		'Ranchers' => 'Ranchers',
		'Rancho' => 'Rancho',
		'Ranga' => 'Ranga',
		'Ravi Prakash' => 'Ravi Prakash',
		'Rationale' => 'Rationale',
		'Redressed' => 'Redressed',
		'Reenie Beanie' => 'Reenie Beanie',
		'Revalia' => 'Revalia',
		'Rhodium Libre' => 'Rhodium Libre',
		'Ribeye' => 'Ribeye',
		'Ribeye Marrow' => 'Ribeye Marrow',
		'Righteous' => 'Righteous',
		'Risque' => 'Risque',
		'Roboto' => 'Roboto',
		'Roboto Condensed' => 'Roboto Condensed',
		'Roboto Mono' => 'Roboto Mono',
		'Roboto Slab' => 'Roboto Slab',
		'Rochester' => 'Rochester',
		'Rock Salt' => 'Rock Salt',
		'Rokkitt' => 'Rokkitt',
		'Romanesco' => 'Romanesco',
		'Ropa Sans' => 'Ropa Sans',
		'Rosario' => 'Rosario',
		'Rosarivo' => 'Rosarivo',
		'Rouge Script' => 'Rouge Script',
		'Rozha One' => 'Rozha One',
		'Rubik' => 'Rubik',
		'Rubik One' => 'Rubik One',
		'Rubik Mono One' => 'Rubik Mono One',
		'Ruda' => 'Ruda',
		'Rufina' => 'Rufina',
		'Ruge Boogie' => 'Ruge Boogie',
		'Ruluko' => 'Ruluko',
		'Rum Raisin' => 'Rum Raisin',
		'Ruslan Display' => 'Ruslan Display',
		'Russo One' => 'Russo One',
		'Ruthie' => 'Ruthie',
		'Rye' => 'Rye',
		'Sacramento' => 'Sacramento',
		'Sail' => 'Sail',
		'Salsa' => 'Salsa',
		'Sanchez' => 'Sanchez',
		'Sancreek' => 'Sancreek',
		'Sahitya' => 'Sahitya',
		'Sansita One' => 'Sansita One',
		'Sarpanch' => 'Sarpanch',
		'Sarina' => 'Sarina',
		'Satisfy' => 'Satisfy',
		'Scada' => 'Scada',
		'Scheherazade' => 'Scheherazade',
		'Schoolbell' => 'Schoolbell',
		'Seaweed Script' => 'Seaweed Script',
		'Sarala' => 'Sarala',
		'Sevillana' => 'Sevillana',
		'Seymour One' => 'Seymour One',
		'Shadows Into Light' => 'Shadows Into Light',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shanti' => 'Shanti',
		'Share' => 'Share',
		'Share Tech' => 'Share Tech',
		'Share Tech Mono' => 'Share Tech Mono',
		'Shojumaru' => 'Shojumaru',
		'Short Stack' => 'Short Stack',
		'Sigmar One' => 'Sigmar One',
		'Suranna' => 'Suranna',
		'Suravaram' => 'Suravaram',
		'Suwannaphum' => 'Suwannaphum',
		'Signika' => 'Signika',
		'Signika Negative' => 'Signika Negative',
		'Simonetta' => 'Simonetta',
		'Siemreap' => 'Siemreap',
		'Sirin Stencil' => 'Sirin Stencil',
		'Six Caps' => 'Six Caps',
		'Skranji' => 'Skranji',
		'Slackey' => 'Slackey',
		'Smokum' => 'Smokum',
		'Smythe' => 'Smythe',
		'Sniglet' => 'Sniglet',
		'Snippet' => 'Snippet',
		'Snowburst One' => 'Snowburst One',
		'Sofadi One' => 'Sofadi One',
		'Sofia' => 'Sofia',
		'Sonsie One' => 'Sonsie One',
		'Sorts Mill Goudy' => 'Sorts Mill Goudy',
		'Sorts Mill Goudy' => 'Sorts Mill Goudy',
		'Source Code Pro' => 'Source Code Pro',
		'Source Sans Pro' => 'Source Sans Pro',
		'Special I am one' => 'Special I am one',
		'Spicy Rice' => 'Spicy Rice',
		'Spinnaker' => 'Spinnaker',
		'Spirax' => 'Spirax',
		'Squada One' => 'Squada One',
		'Sree Krushnadevaraya' => 'Sree Krushnadevaraya',
		'Stalemate' => 'Stalemate',
		'Stalinist One' => 'Stalinist One',
		'Stardos Stencil' => 'Stardos Stencil',
		'Stint Ultra Condensed' => 'Stint Ultra Condensed',
		'Stint Ultra Expanded' => 'Stint Ultra Expanded',
		'Stoke' => 'Stoke',
		'Stoke' => 'Stoke',
		'Strait' => 'Strait',
		'Sura' => 'Sura',
		'Sumana' => 'Sumana',
		'Sue Ellen Francisco' => 'Sue Ellen Francisco',
		'Sunshiney' => 'Sunshiney',
		'Supermercado One' => 'Supermercado One',
		'Swanky and Moo Moo' => 'Swanky and Moo Moo',
		'Syncopate' => 'Syncopate',
		'Symbol' => 'Symbol',
		'Timmana' => 'Timmana',
		'Taprom' => 'Taprom',
		'Tangerine' => 'Tangerine',
		'Tahoma' => 'Tahoma',
		'Teko' => 'Teko',
		'Telex' => 'Telex',
		'Tenali Ramakrishna' => 'Tenali Ramakrishna',
		'Tenor Sans' => 'Tenor Sans',
		'Terminal Dosis' => 'Terminal Dosis',
		'Terminal Dosis Light' => 'Terminal Dosis Light',
		'Text Me One' => 'Text Me One',
		'The Girl Next Door' => 'The Girl Next Door',
		'Tienne' => 'Tienne',
		'Tillana' => 'Tillana',
		'Tinos' => 'Tinos',
		'Titan One' => 'Titan One',
		'Titillium Web' => 'Titillium Web',
		'Trade Winds' => 'Trade Winds',
		'Trebuchet MS' => 'Trebuchet MS',
		'Trocchi' => 'Trocchi',
		'Trochut' => 'Trochut',
		'Trykker' => 'Trykker',
		'Tulpen One' => 'Tulpen One',
		'Ubuntu' => 'Ubuntu',
		'Ubuntu Condensed' => 'Ubuntu Condensed',
		'Ubuntu Mono' => 'Ubuntu Mono',
		'Ultra' => 'Ultra',
		'Uncial Antiqua' => 'Uncial Antiqua',
		'Underdog' => 'Underdog',
		'Unica One' => 'Unica One',
		'UnifrakturCook' => 'UnifrakturCook',
		'UnifrakturMaguntia' => 'UnifrakturMaguntia',
		'Unkempt' => 'Unkempt',
		'Unlock' => 'Unlock',
		'Unna' => 'Unna',
		'VT323' => 'VT323',
		'Vampiro One' => 'Vampiro One',
		'Varela' => 'Varela',
		'Varela Round' => 'Varela Round',
		'Vast Shadow' => 'Vast Shadow',
		'Vesper Libre' => 'Vesper Libre',
		'Verdana' => 'Verdana',
		'Vibur' => 'Vibur',
		'Vidaloka' => 'Vidaloka',
		'Viga' => 'Viga',
		'Voces' => 'Voces',
		'Volkhov' => 'Volkhov',
		'Vollkorn' => 'Vollkorn',
		'Voltaire' => 'Voltaire',
		'Waiting for the Sunrise' => 'Waiting for the Sunrise',
		'Wallpoet' => 'Wallpoet',
		'Walter Turncoat' => 'Walter Turncoat',
		'Warnes' => 'Warnes',
		'Wellfleet' => 'Wellfleet',
		'Wendy One' => 'Wendy One',
		'Wire One' => 'Wire One',
		'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
		'Yantramanav' => 'Yantramanav',
		'Yellowtail' => 'Yellowtail',
		'Yeseva One' => 'Yeseva One',
		'Yesteryear' => 'Yesteryear',
		'Zeyada' => 'Zeyada'
	);
	//array of all font sizes.
	$font_sizes = array( 
		'10px' => '10px',
		'11px' => '11px',
	);
	for($n=12;$n<=100;$n+=1){
		$font_sizes[$n.'px'] = $n.'px';
	}
	
	$options = array();
	$imagepath =  get_template_directory_uri() . '/images/';
	
	// Pull all the categories into an array
	 $options_category = array();
	 $options_category_obj = get_categories('sort_column=category_parent,menu_order');
	 $options_category[''] = 'Select a Category:';
	 foreach ($options_category_obj as $category) {
	  $options_category[$category->term_id] = $category->cat_name;
	 }
	// array of section content.
 
	$options = array();
	//Basic Settings
	$options[] = array(
		'name' => __('Basic Settings', 'skt-newspaper'),
		'type' => 'heading');
	$options[] = array(
	'name' => __('Inner Page Banner', 'skt-newspaper'),
	'desc' => __('Upload inner page banner for site', 'skt-newspaper'),
	'id' => 'innerpagebanner',
	'class' => '',
	'std'	=> get_template_directory_uri()."/images/default-banner.jpg",
	'type' => 'upload');
	$options[] = array(
		'name' => __('Logo', 'skt-newspaper'),
		'desc' => __('Upload your main logo here', 'skt-newspaper'),
		'id' => 'logo',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Custom CSS', 'skt-newspaper'),
		'desc' => __('Some Custom Styling for your site. Place any css codes here instead of the style.css file.', 'skt-newspaper'),
		'id' => 'style2',
		'std' => '',
		'type' => 'textarea');	
 
	// font family start 
	$options[] = array(
		'name' => __('Font Faces', 'skt-newspaper'),
		'desc' => __('Select font for the body text', 'skt-newspaper'),
		'id' => 'bodyfontface',
		'type' => 'select',
		'std' => 'Arimo',
		'options' => $font_types ); 
	// font sizes start
	
	$options[] = array(
		'name' => __('Font Sizes', 'skt-newspaper'),
		'desc' => __('Select font size for body text', 'skt-newspaper'),
		'id' => 'bodyfontsize',
		'type' => 'select',
		'std' => '13px',
		'options' => $font_sizes );
		 
	// font colors start
	$options[] = array(
		'name' => __('Font Colors', 'skt-newspaper'),
		'desc' => __('Select font color for the body text', 'skt-newspaper'),
		'id' => 'bodyfontcolor',
		'std' => '#000000',
		'type' => 'color');
		      
				
	$options[] = array(
		'desc' => __('Select font color for navigation', 'skt-newspaper'),
		'id' => 'navfontcolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select all link font color and other background color', 'skt-newspaper'),
		'id' => 'linkcolor',
		'std' => '#ff7f00',
		'type' => 'color');

	//Layout Settings
	$options[] = array(
		'name' => __('Sections', 'skt-newspaper'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('Left Side Slider Category Posts Below the Navigation','skt-newspaper'),
		'desc'	=> __('Select left side category for slider below the navigation will show all posts','skt-newspaper'),
		'id' 	=> 'slidersection',
		'type'	=> 'select',
		'options' => $options_category,
	);	
	
	$options[] = array(
		'name' => __('Right Side Category Posts Below the Navigation','skt-newspaper'),
		'desc'	=> __('Select category for right side below the navigation will show recent 4 posts','skt-newspaper'),
		'id' 	=> 'rightsection',
		'type'	=> 'select',
		'options' => $options_category,
	);		
			
		
	$options[] = array(
		'name' => __('Recent Posts of the Category','skt-newspaper'),
		'desc'	=> __('select category for posts (will show recent 2 posts of the category)','skt-newspaper'),
		'id' 	=> 'categorypostslist',
		'type'	=> 'select',
		'options' => $options_category,
	);
		
	$options[] = array(
		'name' => __('Number of Sections', 'skt-newspaper'),
		'desc' => __('Select number of sections', 'skt-newspaper'),
		'id' => 'numsection',
		'type' => 'select',
		'std' => '0',
		'options' => array_combine(range(0,0), range(0,0)) );
	$numsecs = of_get_option( 'numsection', 0 );
	for( $n=1; $n<=$numsecs; $n++){
		$options[] = array(
			'desc' => __("<h3>Section ".$n."</h3>", 'skt-newspaper'),
			'class' => 'toggle_title',
			'type' => 'info');	
	
		$options[] = array(
			'name' => __('Section Title', 'skt-newspaper'),
			'id' => 'sectiontitle'.$n,
			'std' => ( ( isset($section_text[$n]['section_title']) ) ? $section_text[$n]['section_title'] : '' ),
			'type' => 'text');
		$options[] = array(
			'name' => __('Section ID', 'skt-newspaper'),
			'desc'	=> __('Enter your section ID here. SECTION ID MUST BE IN SMALL LETTERS ONLY AND DO NOT ADD SPACE OR SYMBOL.'),
			'id' => 'menutitle'.$n,
			'std' => ( ( isset($section_text[$n]['menutitle']) ) ? $section_text[$n]['menutitle'] : '' ),
			'type' => 'text');
		$options[] = array(
			'name' => __('Section Background Color', 'skt-newspaper'),
			'desc' => __('Select background color for section', 'skt-newspaper'),
			'id' => 'sectionbgcolor'.$n,
			'std' => ( ( isset($section_text[$n]['bgcolor']) ) ? $section_text[$n]['bgcolor'] : '' ),
			'type' => 'color');
			
		$options[] = array(
			'name' => __('Background Image', 'skt-newspaper'),
			'id' => 'sectionbgimage'.$n,
			'class' => '',
			'std' => ( ( isset($section_text[$n]['bgimage']) ) ? $section_text[$n]['bgimage'] : '' ),
			'type' => 'upload');
		$options[] = array(
			'name' => __('Section CSS Class', 'skt-newspaper'),
			'desc' => __('Set class for this section.', 'skt-newspaper'),
			'id' => 'sectionclass'.$n,
			'std' => ( ( isset($section_text[$n]['class']) ) ? $section_text[$n]['class'] : '' ),
			'type' => 'text');
			
		$options[] = array(
			'name'	=> __('Hide Section', 'skt-newspaper'),
			'desc'	=> __('Check to hide this section', 'skt-newspaper'),
			'id'	=> 'hidesec'.$n,
			'type'	=> 'checkbox',
			'std'	=> '');
		$options[] = array(
			'name' => __('Section Content', 'skt-newspaper'),
			'id' => 'sectioncontent'.$n,
			'std' => ( ( isset($section_text[$n]['content']) ) ? $section_text[$n]['content'] : '' ),
			'type' => 'editor');
	}
	
	
	//Layout Settings
	$options[] = array(
		'name' => __('Layout Settings Buy Pro Version', 'skt-newspaper'),
		'type' => 'heading');
		
		
	$options[] = array(
		'name' => "Home Templates Layout",
		'desc' => "Select Layout after asign static front page",
		'id' => "templates-layout",
		'std' => "right",
		'type' => "images",
		'options' => array(
			'left' => $imagepath . '2cl.png',
			'right' => $imagepath . '2cr.png',
			'center' => $imagepath. '3cr.png',
			'fullwidth' => $imagepath. '0c.png',
			'nosidebar' => $imagepath. '0clr.png')
	);			
	
	$options[] = array(
		'name' => "Inner Pages Layout",
		'desc' => "Select Layout for Inner Pages.",
		'id' => "sidebar-layout",
		'std' => "center",
		'type' => "images",
		'options' => array(
			'left' => $imagepath . '2cl.png',
			'right' => $imagepath . '2cr.png',
			'center' => $imagepath. '3cr.png',
			'fullwidth' => $imagepath. '0c.png',
			'nosidebar' => $imagepath. '0clr.png')
	);
	
	$options[] = array(
		'name' => "Blog Single Layout",
		'desc' => "Select Layout for blog single",
		'id' => "single-layout",
		'std' => "center",
		'type' => "images",
		'options' => array(
			'left' => $imagepath . '2cl.png',
			'right' => $imagepath . '2cr.png',
			'center' => $imagepath. '3cr.png',
			'fullwidth' => $imagepath. '0c.png',
			'nosidebar' => $imagepath. '0clr.png')
	);
	
	//Header Section
	$options[] = array(
		'name' => __('Header', 'skt-newspaper'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Header Headline', 'skt-newspaper'),
		'desc' => __('Change icon from font awesome NOTE: Icon name should be in lowercase without space.(exa.fire) More social icons can be found at: http://fortawesome.github.io/Font-Awesome/icons/', 'skt-newspaper'),
		'id' => 'headline',
		'std' => '<i class="fa fa-bullhorn"></i> Headline',
		'type' => 'textarea');	
		
	$options[] = array(
		'name' => __('Headline Text', 'skt-newspaper'),
		'desc' => __('headline text for header', 'skt-newspaper'),
		'id' => 'headlinetext',
		'std' => 'Pellentesque non sem porttitor, porttitor eros eget, lobortis lacus eugiat vitae augue non, tincidunt posuere',
		'type' => 'textarea');	

	
	//Footer SETTINGS
	$options[] = array(
		'name' => __('Footer', 'skt-newspaper'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Footer Layout', 'skt-newspaper'),
		'desc' => __('Select footer layout ex: Footer column 1, 2, 3, 4', 'skt-newspaper'),
		'id' => 'footerlayout',
		'std' => 'footer-column3',
		'type' => 'select',
		'options' => array('footer-column3'=>'Footer Column 3'));		

	$options[] = array(
		'name' => __('Footer Quick Links', 'skt-newspaper'),
		'desc' => __('Quick Link title.', 'skt-newspaper'),
		'id' => 'footerabttitle',
		'std' => 'Quick Links',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Footer Recent Posts', 'skt-newspaper'),
		'desc' => __('Footer Recent Posts title.', 'skt-newspaper'),
		'id' => 'recenttitle',
		'std' => 'Recent Posts',
		'type' => 'text');
	$options[] = array(
		'name' => __('Footer Address Title', 'skt-newspaper'),
		'desc' => __('Footer Address title.', 'skt-newspaper'),
		'id' => 'addresstitle',
		'std' => 'Contact Info',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Add company address here.', 'skt-newspaper'),
		'id' => 'address1',
		'std' => 'Street no. 2603 Beechwood St,',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Add company address here.', 'skt-newspaper'),
		'id' => 'address2',
		'std' => 'Odessa, TX 79761 <br> USA.',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Add phone number here.', 'skt-newspaper'),
		'id' => 'phone',
		'std' => '+1 800 234 5678',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Add email address here.', 'skt-newspaper'),
		'id' => 'email',
		'std' => 'info@sitename.com',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Add company url here with http://.', 'skt-newspaper'),
		'id' => 'weblink',
		'std' => 'http://demo.com',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Footer Get In Touch', 'skt-newspaper'),
		'desc' => __('Footer Get In Touch title.', 'skt-newspaper'),
		'id' => 'getintouch',
		'std' => 'Get In Touch',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('add social icon name and link in the shortcodes.  NOTE: Icon name should be in lowercase without space.(exa.phone) More social icons can be found at: http://fortawesome.github.io/Font-Awesome/icons/', 'skt-newspaper'),
		'id' => 'footersocialicons',
		'std' => '[social_area]
    [social icon="facebook" link="#"]
    [social icon="twitter" link="#"]
    [social icon="linkedin" link="#"]
    [social icon="pinterest" link="#"]
    [social icon="google-plus" link="#"]
	[social icon="youtube" link="#"]
	[social icon="skype" link="#"]
    [social icon="tumblr" link="#"]
    [social icon="instagram" link="#"]
    [social icon="yahoo" link="#"]
    [social icon="dribbble" link="#"]
	[social icon="stumbleupon" link="#"]
	[social icon="stumbleupon" link="#"]
    [social icon="soundcloud" link="#"]
    [social icon="behance" link="#"]
    [social icon="yelp" link="#"]
    [social icon="wordpress" link="#"]
	[social icon="vine" link="#"]
	[social icon="rss" link="#"]
    [social icon="flickr" link="#"]
    [social icon="linkedin" link="#"]
    [social icon="pinterest" link="#"]
    [social icon="google-plus" link="#"]
	[social icon="youtube" link="#"]
	[social icon="facebook" link="#"]
    [social icon="twitter" link="#"]
    [social icon="linkedin" link="#"]
    [social icon="pinterest" link="#"]
    [social icon="google-plus" link="#"]
	[social icon="youtube" link="#"]
	[social icon="facebook" link="#"]
    [social icon="twitter" link="#"]
    [social icon="linkedin" link="#"]
    [social icon="pinterest" link="#"]
    [social icon="google-plus" link="#"]
	[social icon="youtube" link="#"]	
[/social_area]',
		'type' => 'textarea');			

		
	$options[] = array(
		'name' => __('Footer Copyright', 'skt-newspaper'),
		'desc' => __('Copyright Text for your site.', 'skt-newspaper'),
		'id' => 'copytext',
		'std' => '&copy; 2018 <a href="https://www.sktthemes.net/shop/wordpress-news-theme-free/" target="_blank"> SKT Newspaper Lite</a>. All Rights Reserved',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Footre Text Link', 'skt-newspaper'),
		'id' => 'ftlink',
		'std' => 'Design by <a href="#" target="_blank" rel="nofollow">SKT Themes</a>',
		'type' => 'textarea',);
		
	
 
	// Support					
	$options[] = array(
		'name' => __('Our Themes', 'skt-newspaper'),
		'type' => 'heading');
	$options[] = array(
		'desc' => __('SKT Newspaper Lite WordPress theme has been Designed and Created by <a href="'.esc_url('https://sktthemes.net/').'" target="_blank">SKT Themes</a>', 'skt-newspaper'),
		'type' => 'info');	
	 $options[] = array(
		'desc' => __('<a href="'.esc_url('https://sktthemes.net/').'" target="_blank"><img src="https://www.sktthemes.net/wp-content/uploads/2015/07/sktskill.jpg"></a>', 'skt-newspaper'),
		'type' => 'info');	
	return $options;
}