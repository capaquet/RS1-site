<?php
if (!file_exists("private"))
	mkdir("private");
if (!file_exists("private/article.db"))
{
	$ar = array();
	$ar["id"] = 1;
	$ar["name"] = "Shaq-fu";
	$ar["price"] = "99.99";
	$ar["categorie"] = "combat";
	$ar["stock"] = "1";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/shak-fu.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 2;
	$ar["name"] = "Tongue of the Fatman";
	$ar["price"] = "8.56";
	$ar["categorie"] = "combat";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/Tongue-of-the-fatman.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 3;
	$ar["name"] = "Super Bust a Move";
	$ar["price"] = "7.66";
	$ar["categorie"] = "puzzle";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/super-bust-a-move.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 4;
	$ar["name"] = "Space Pirates";
	$ar["price"] = "8.21";
	$ar["categorie"] = "action";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/space-pirates.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 5;
	$ar["name"] = "X-Man";
	$ar["price"] = "9.22";
	$ar["categorie"] = "adulte";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/x-man.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 6;
	$ar["name"] = "Rival Turf!";
	$ar["price"] = "5.63";
	$ar["categorie"] = "combat";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/rival-turf.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 7;
	$ar["name"] = "Blood 'n Guts";
	$ar["price"] = "6.26";
	$ar["categorie"] = "puzzle;arcade";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/Bood-in-guts.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 8;
	$ar["name"] = "Ninja Scooter Simulator";
	$ar["price"] = "7.12";
	$ar["categorie"] = "arcade";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/ninja-scooter-simulator.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar = array();
	$ar["id"] = 9;
	$ar["name"] = "Ninja Golf";
	$ar["price"] = "9.29";
	$ar["categorie"] = "sport";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/Ninja-Golf.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 10;
	$ar["name"] = "Metro Cross";
	$ar["price"] = "5.98";
	$ar["categorie"] = "arcade;sport";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/metro-cross.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 11;
	$ar["name"] = "Mega Man";
	$ar["price"] = "8.50";
	$ar["categorie"] = "plate-forme;action";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/Mega-man.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 12;
	$ar["name"] = "Mega Man 2";
	$ar["price"] = "8.21";
	$ar["categorie"] = "plate-forme;action";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/mega-man-2.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar = array();
	$ar["id"] = 13;
	$ar["name"] = "Karnaaj Rally";
	$ar["price"] = "7.58";
	$ar["categorie"] = "combat;course";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/Karnaaj.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 14;
	$ar["name"] = "I Want My Mommy";
	$ar["price"] = "8.95";
	$ar["categorie"] = "plate-forme";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/I-want-my-mommy.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 15;
	$ar["name"] = "Phalanx";
	$ar["price"] = "5.99";
	$ar["categorie"] = "action;combat";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/hyper-speed-shoot-outs-in-space.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 16;
	$ar["name"] = "Dudes Attitude";
	$ar["price"] = "7.65";
	$ar["categorie"] = "puzzle";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/dudes-attitude.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar = array();
	$ar["id"] = 17;
	$ar["name"] = "Docteur Sudoku";
	$ar["price"] = "8.47";
	$ar["categorie"] = "puzzle";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/DR-Sudoku.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 18;
	$ar["name"] = "Cheggers Party Quiz";
	$ar["price"] = "6.32";
	$ar["categorie"] = "quizz";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/chegguers-party-quiz.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 19;
	$ar["name"] = "Checkers";
	$ar["price"] = "9.51";
	$ar["categorie"] = "puzzle";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/Checkers.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 20;
	$ar["name"] = "Bust a move 2";
	$ar["price"] = "6.21";
	$ar["categorie"] = "puzzle";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/Bust-a-move-2.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar = array();
	$ar["id"] = 21;
	$ar["name"] = "Barbarian: The Ultimate Warrior";
	$ar["price"] = "8.38";
	$ar["categorie"] = "combat";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/Barbarian.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 22;
	$ar["name"] = "Ka Ge Ki";
	$ar["price"] = "8.64";
	$ar["categorie"] = "combat";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/kageki.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 23;
	$ar["name"] = "Jill of the Jungle";
	$ar["price"] = "5.99";
	$ar["categorie"] = "plate-forme";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/Jill-in-the-jungle.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 24;
	$ar["name"] = "Amnesia";
	$ar["price"] = "9.21";
	$ar["categorie"] = "horreur";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/Amnesia.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar = array();
	$ar["id"] = 25;
	$ar["name"] = "Xenon 2";
	$ar["price"] = "7.89";
	$ar["categorie"] = "combat";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/xenon-2.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 26;
	$ar["name"] = "Trevor McFur";
	$ar["price"] = "9.58";
	$ar["categorie"] = "combat";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/trevor-mcfur.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 27;
	$ar["name"] = "Street Warrior";
	$ar["price"] = "5.68";
	$ar["categorie"] = "combat";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/street-warrior.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 28;
	$ar["name"] = "Freestyle Metal X";
	$ar["price"] = "6.82";
	$ar["categorie"] = "sport";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/freestyle-metalx.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar = array();
	$ar["id"] = 29;
	$ar["name"] = "Irritating Stick";
	$ar["price"] = "5.95";
	$ar["categorie"] = "puzzle";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/1268761-55a9812cbfc9a6a61ef49483e6dd8e32_irritating_stick.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
	$arr = unserialize(file_get_contents("private/article.db"));
	$ar["id"] = 30;
	$ar["name"] = "Power Instinct";
	$ar["price"] = "8.67";
	$ar["categorie"] = "combat;arcade";
	$ar["stock"] = "4";
	$ar["url"] = "http://media.topito.com/wp-content/uploads/2013/08/Power-Instinct-Horrible-Cover.jpg";
	$arr[] = $ar;
	file_put_contents("private/article.db", serialize($arr));
}
else
	echo "ERROR, article.db already exist\n";
if (!file_exists("private/user.db"))
{
	$ar1 = array();
	$ar1["login"] = "admin";
	$ar1["passwd"] = hash("whirlpool", "admin");
	$ar1["access"] = 1;
	$arr1[] = $ar1;
	file_put_contents("private/user.db", serialize($arr1));
	$ar1["login"] = "coucou";
	$ar1["passwd"] = hash("whirlpool", "admin");
	$ar1["access"] = 0;
	$arr1[] = $ar1;
	file_put_contents("private/user.db", serialize($arr1));
}
else
	echo "ERROR, user.db already exist\n";
if (!file_exists("private/histo.db"))
	file_put_contents("private/histo.db", "");
else
	echo "ERROR, histo.db already exist\n";
?>
