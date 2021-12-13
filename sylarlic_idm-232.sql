-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2021-12-12 18:27:21
-- 服务器版本： 5.7.23-23
-- PHP 版本： 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `sylarlic_idm-232`
--

-- --------------------------------------------------------

--
-- 表的结构 `recipe`
--

CREATE TABLE `recipe` (
  `r_ID` int(11) NOT NULL,
  `r_title` varchar(128) NOT NULL,
  `r_imgName` varchar(128) NOT NULL,
  `r_difficulty` int(11) NOT NULL,
  `r_region` varchar(128) NOT NULL,
  `r_type` varchar(128) NOT NULL,
  `r_prepTime` int(11) NOT NULL,
  `r_cookTime` int(11) NOT NULL,
  `r_origin` text NOT NULL,
  `r_ingredients` text NOT NULL,
  `r_steps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `recipe`
--

INSERT INTO `recipe` (`r_ID`, `r_title`, `r_imgName`, `r_difficulty`, `r_region`, `r_type`, `r_prepTime`, `r_cookTime`, `r_origin`, `r_ingredients`, `r_steps`) VALUES
(2, 'Kwama Egg Quiche', '61a124648af500.21021777.jpg', 4, 'Nord', 'Basics', 20, 70, 'Originally only known in Vvardenfell, this recipe traveled with. Dunmer fleeing Morrowind after the Red Mountain&#039;s eruption and has been well received throughout much of Tamriel, albeit with various regional tweaks to the ingredient list. The lightly seasoned filling and crisp crust can satisfy even the pickiest palate.', '1 recipe Rye Pie Dough\r\n(page 39)\r\nI tablespoon salted butter\r\nI or 2 cloves garlic, minced\r\n2 medium tomatoes, divided\r\n1 medium kwama egg or\r\n4 chicken eggs\r\n½ cup whole milk\r\n1 cup shredded cheddar\r\ncheese\r\n½ cup grated Parmesan\r\ncheese\r\n½ teaspoon salt', '1. Preheat the oven to 350°F. Roll out the Rye Pie Dough to about ½inch thick, and gently drape over a tart or pie pan. Press carefullyinto the bottom and sides of the pan, and trim off any excess. Prickthe bottom of the pastry several times with a fork to prevent it frombubbling up.\r\n\r\n2. Melt the butter in a medium saute pan or skillet over medium heat.Add the garlic and cook for several minutes, until slightly browned.Chop one of the tomatoes, add to the pan, and cook for anotherfew minutes, until the tomatoes are soft, but not yet falling apart.Remove from heat and set aside.3. In a large bowl, whisk together the eggs, milk, cheddar cheese,Parmesan cheese, and salt. Pour this mixture into the pastry shell,slice the remaining tomato, then evenly layer the tomatoes on topof the filling. Bake for about an hour, or until the egg top is goldenand puffy around the tomatoes. Allow to cool for 10 minutes beforeslicing and serving.'),
(3, 'Strewed Apples and Eidar Cheese', '61a1408a4d4bf3.87856339.png', 3, 'Nord', 'Sides', 10, 10, 'Try this recipe alongside a hearty slice of meat after a long and arduous quest-you won&#039;t be disappointed. Most apples work well in this recipe, but be sure to avoid any poisoned ones by eschewing any apples you find sitting alone on a table with no other food present. As a bonus, this versatile side dish can also do double duty as a dessert. If you&#039;re not a fan of eidar cheese&#039;s distinct ripeness, try a milder goat cheese crumble or leave it off altogether for a sweeter version. ', '3 tablespoons unsalted butter\r\n4 or 5 large sweet apples,\r\npeeled, cored, and diced\r\n¼ cup dried currants\r\n½ cup packed brown sugar\r\nI teaspoon Nord Spices\r\n(page 23)\r\nPinch of salt\r\nDash of vanilla extract\r\n2 teaspoons cornstarch\r\n¼ cup cold water\r\n¼ cup crumbled blue cheese\r\nfor topping', '1. Melt the butter in a large saute pan or skillet over medium heat.\r\nAdd the apples and cook, stirring occasionally, for about 6 minutes,\r\nor until the apples are somewhat tender. Stir in the currants, brown\r\nsugar, Nord Spices, salt, and vanilla.\r\n2 . In a small bowl, mix together the cornstarch and water, then add to\r\nthe pan with the apples. Cook another minute or so, until the whole\r\nmixture has thickened somewhat. Spoon into serving dishes and top\r\nwith crumbled blue cheese to taste.');

-- --------------------------------------------------------

--
-- 表的结构 `recipes`
--

CREATE TABLE `recipes` (
  `r_ID` int(11) NOT NULL,
  `r_title` varchar(128) NOT NULL,
  `r_imgName` varchar(128) NOT NULL,
  `r_difficulty` int(11) NOT NULL,
  `r_region` varchar(128) NOT NULL,
  `r_type` varchar(128) NOT NULL,
  `r_prepTime` int(11) NOT NULL,
  `r_cookTime` int(11) NOT NULL,
  `r_origin` text NOT NULL,
  `r_ingredients` text NOT NULL,
  `r_steps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `recipes`
--

INSERT INTO `recipes` (`r_ID`, `r_title`, `r_imgName`, `r_difficulty`, `r_region`, `r_type`, `r_prepTime`, `r_cookTime`, `r_origin`, `r_ingredients`, `r_steps`) VALUES
(9, 'Strewed Apples and Eidar Cheese', '61a1408a4d4bf3.87856339.png', 3, 'Dumer', 'Sides', 10, 10, 'Try this recipe alongside a hearty slice of meat after a long and arduous quest-you won&#039;t be disappointed. Most apples work well in this recipe, but be sure to avoid any poisoned ones by eschewing any apples you find sitting alone on a table with no other food present. As a bonus, this versatile side dish can also do double duty as a dessert. If you&#039;re not a fan of eidar cheese&#039;s distinct ripeness, try a milder goat cheese crumble or leave it off altogether for a sweeter version. ', '3 tablespoons unsalted butter||\r\n4 or 5 large sweet apples,peeled, cored, and diced ||\r\n¼ cup dried currants ||\r\n½ cup packed brown sugar ||\r\nI teaspoon Nord Spices ||\r\nPinch of salt ||\r\nDash of vanilla extract ||\r\n2 teaspoons cornstarch ||\r\n¼ cup cold water ||\r\n¼ cup crumbled blue cheese for topping ||', '1. Melt the butter in a large saute pan or skillet over medium heat.\r\nAdd the apples and cook, stirring occasionally, for about 6 minutes,\r\nor until the apples are somewhat tender. Stir in the currants, brown\r\nsugar, Nord Spices, salt, and vanilla.\r\n||\r\n2 . In a small bowl, mix together the cornstarch and water, then add to\r\nthe pan with the apples. Cook another minute or so, until the whole\r\nmixture has thickened somewhat. Spoon into serving dishes and top\r\nwith crumbled blue cheese to taste.'),
(14, 'Nord Spices', '61b39ec4dffb77.01376233.png', 2, 'Nord', 'Basics', 5, 5, 'This warming blend of spices brings to life any cold-weather recipe that includes it. The warmth of the cardamom and cinnamon is balanced by the bite of mace, love, and grains, making it a solid addition to desserts, baking, and hot drinks.        ', '1½ tablespoons ground cardamom ||\r\n¾ teaspoon ground cinnamon ||\r\n¼ teaspoon ground mace ||\r\n¼ teaspoon ground cloves ||\r\n½ teaspoon ground grains of paradise ||        ', '1. Mix together all of the ground ingredients; then store in a\r\nsmall airtight jar.        '),
(15, 'Stormcloak Seasoning', '61b39e9018cf39.79549776.png', 2, 'Redguard', 'Basics', 5, 5, 'This is one of the most popular seasoning mixes across the breadth of Skyrim, where nearly every garden boasts a little corner dedicated to growing most of these ingredients. The grains of paradise are imported, and if the cost is too dear, ordinary black pepper can be substituted. It makes for a mixture that goes well with vegetables, fish, meat, and savory baking.        ', '2 teaspoons dried dill ||\r\n½ teaspoon grains of paradise ||\r\n1 teaspoon mustard powder ||\r\n2 teaspoons fennel seeds ||        ', '1. Crush or grind all the ingredients together using a mortar and pestle or a clean spice grinder, then store in a small airtight jar.        '),
(16, 'Imperial Seasoning', '61b39e72bc5f26.22701753.png', 2, 'Imperial', 'Basics', 5, 5, 'Brought by Imperial troops and their regiment cooks, this mix\r\nhas put down roots and is gaining in popularity in Skyrim, even if the Imperials themselves are not. It&#039;s a unique combination of savory flavors and a bright citrus profile lent by the coriander, and it is delicious on vegetables and fish.        ', '3 teaspoons dried marjoram||\r\n3 teaspoons dried savory||\r\n1 teaspoon coriander seeds||\r\n¼ teaspoon white pepper||', '1. Crush or grind ingredients together using a mortar and pestle or a clean spice grinder, then store in a small airtight jar.        '),
(17, 'Custard Sause', '61b3a07f94c1e5.69756897.png', 5, 'Breton', 'Basics', 60, 10, 'A good custard sauce should be thick and creamy and is equally delicious poured over desserts as it is eaten straight off the spoon. The shaggy cows of Skyrim give especially good milk for custard, as it is rich with the flavors of their mountainside grazing.', '1½ cups whole milk  ||\r\n2 teaspoons cornstarch ||\r\n2 tablespoons sugar ||\r\n2 eggs ||\r\nDash of almond extract ||', '1. Combine the milk, cornstarch, sugar, and eggs in a small saucepan\r\nover medium heat. Whisk continuously while the mixture heats up,\r\nuntil the eggs are completely incorporated.\r\n||\r\n2. Stir occasionally for 6 to 8 minutes, until the custard is thick enough\r\nto coat the back of a spoon; it should be around 160°F.\r\n||\r\n3. Remove from the heat and stir in the almond flavoring extract, then\r\nstrain into a clean small pitcher.'),
(18, 'Baked Ash Yams', '61b3a1f85e5310.40768127.png', 2, 'Dunmer', 'Sides', 5, 45, 'Ash yams are one of the few vegetables that thrive in Morrowind&#039;s climate, especially after the volcanic explosion of the Red Mountain. Some of the Dunmer fleeing that devastation thoughtfully packed yams and introduced them to Skyrim, where some Nords have added theirs. own distinct flavors to this recipe.', '4 large yams||\r\nr recipe Spiced Butter||\r\n¼ cup crumbled goat cheese||\r\nParsley, minced, for garnishing||', '1. Preheat the oven to 42 5°F. Clean and dry the yams, then prick them\r\nall over several times with a knife.\r\n||\r\n2. Place the yams directly on an oven rack placed in the middle\r\nposition with a baking sheet on the rack below to catch any\r\ndrippings. Bake for 45 to 60 minutes, or until you can easily pierce\r\neach yam with a knife. Remove from the oven.\r\n||\r\n3. Wrapping one yam at a time in a kitchen towel, cut a large X on the\r\ntop of each, and press on both ends of the yam to open the cuts. Top\r\nwith as much Spiced Butter as you like, then sprinkle goat cheese\r\nand parsley over the top to finish.'),
(19, 'Grilled Leeks', '61b3a2f306bc92.37756028.png', 2, 'Bosmer', 'Sides', 5, 15, 'Although leeks can be a little finicky to grow, it&#039;s no wonder they thrive around all the Riverlands in Skyrirn. This rugged vegetable is popular in stews and savory pies, but it is also delicious in its own right and can often be spied gracing the tables of the rich and poor alike.', '4 large leeks||\r\n2 tablespoons olive oil||\r\n2 tablespoons grated Parmesan cheese||\r\nSalt and pepper||', '1. Begin by cutting off the tough dark green tops of the leeks, leaving the more tender white and paler green sections. Don&#039;t cut off the root end, which will help the leeks stay together while cooking. Slice each leek in half and rinse thoroughly to remove any dirt.\r\n||\r\n2 . Bring a large pot of water to a boil over high heat and drop the leeks in, letting them cook until they begin to soften about 5 minutes. Remove from the pot and place in a bowl of ice water to stop them from continuing to cook and also hold the color.\r\n||\r\n3. In a wide frying pan, heat the olive oil over medium-high heat. Place the leeks cut-side down in the pan and cook for several minutes until they are starting to brown. Transfer to a serving plate, sprinkle with Parmesan cheese, and season with salt and pepper to taste.'),
(20, 'Braided Bread', '61b3a4703654c1.75861407.png', 6, 'Orsimer', 'Baked', 135, 25, 'Some recipes in Skyrim, like this one, are reserved for special occasions. This beautiful bread is made in the heart of midwinter, when stores are running low and better weather seems a long way off. It makes use of some preciously guarded ingredients with the inclusion of dried fruit, nuts, and spices. All in all, it ·makes a special loaf that promises better days to come, while celebrating the harvest of the previous year.', '1 cup warm milk||\r\n¼ cup packed brown sugar||\r\n2 tablespoons melted unsalted butter||\r\n2 teaspoons instant dry yeast||\r\n1 teaspoon Nord Spices||\r\n2 eggs, divided||\r\n½ cup mixed nuts and dried fruit such as walnuts,||\r\npecans, dried apricots, and dates||\r\n3 cups whole wheat flour||\r\n2 cups all-purpose flour||', '1. Combine the milk, brown sugar, butter, yeast, Nord spice, and 1 of the eggs in a medium bowl. Stir in the nuts and dried fruit, then mix in the flour. Stir to combine the ingredients until they come together into a nice dough that is not too sticky.\r\n||\r\n2. Turn the dough out onto a lightly floured work surface and knead for several minutes, until it bounces back when poked. Cover with a damp cloth and put in a warm place to rise for about 1 hour, or until doubled in size.\r\n||\r\n3. Preheat the oven to 450°F and grease a baking sheet with butter or cover with parchment paper. Divide the dough into 3 equal sections and roll them between your hands or on a work surface to create ropes about 14 inches long. Pinch one end of the ropes together, then place on the baking sheet. Braid the ropes .into a fairly tight braid, then cover again with a cloth to allow to double in size, about an hour.\r\n||\r\n4. Beat the remaining egg in a small bowl and brush it onto the dough. Bake for about 25 minutes, until the bread is a dark and glossy. Let the loaf cool for at least r 5 minutes before slicing into it.'),
(21, 'Meadow Rye Bread', '61b3a52f746b33.34368615.png', 4, 'Altmer', 'Baked', 130, 30, 'This easy bread makes a flavorful accompaniment to any soup but is especially good with creamy varieties. These loaves can commonly be found in tavern kitchens, where their quick baking time means more satisfied customers.', '1 cup whole wheat flour||\r\n1 ½ cups rye flour||\r\n¼ cup packed brown sugar||\r\n1 tablespoon baking soda||\r\n1 teaspoon salt||\r\n½ cup dried currants||\r\n½ cup stout beer||\r\n½ cup buttermilk||', '1. Preheat the oven to 400°F.\r\n||\r\n2 . In a medium bowl, combine the whole wheat flour, rye flour, brown sugar, baking soda, salt, and currants. Add the beer, then gradually mix in the buttermilk until you have a dough that is not too sticky to handle. Turn out onto a lightly floured surface and knead a few times to make sure everything is evenly distributed.\r\n||\r\n3. Form into a large rounded oblong loaf and transfer to a baking sheet. Score the top of the dough in a decorative pattern, then bake for about 40 minutes; the bread should sound hollow when tapped on the bottom.'),
(22, 'Cheese Scones', '61b3a6bc0398b6.37830815.png', 3, 'Altmer', 'Baked', 5, 15, 'While scones are often considered a breakfast item, their versatility makes them prime candidates for meals later in the day, especially when given a slightly more savory touch. Feel free to try this recipe with different types of cheese. Eidar and mammoth cheeses are popular in Skyrim, while more adventurous folk can experiment with scuttle from Morrowind made from the .flesh of local beetles but similar to cheese. These flaky treats are delicious still warm from the oven and dripping with fresh butter.', '2 cups all-purpose flour||\r\n2 tablespoons sugar||\r\n2 teaspoons baking powder||\r\n½ teaspoon mustard powder||\r\n½ teaspoon salt||\r\n¼ cup (½ stick) cold unsalted butter, cubed||\r\n½ cup sour cream||\r\n1 cup shredded aged cheddar cheese||\r\n¾ cup buttermilk||\r\n1 egg, lightly beaten||\r\n2 tablespoons grated Parmesan cheese||', '1. Preheat the oven to 400°F. In a large bowl, combine the flour, sugar, baking powder, mustard powder, and salt. Rub in the butter with your fingers until you have a fine, crumbly texture. \r\n||\r\n2. Add the sour cream, stirring until it has been evenly distributed. Mix in the cheese, then add a little buttermilk at a time until you get a good dough with a consistency that isn&#039;t too dry or too wet. \r\n||\r\n3. Lightly flour a work surface and turn out the dough. Press the dough flat and fold it over onto itself a few times to give the scones some layers, then press out to about ½ inch thick in a roughly circular shape. Using a sharp knife, slice the dough into irregular triangles and place them on a baking sheet that has been greased with butter or lined with parchment. \r\n||\r\n4. Brush the scones with beaten egg and sprinkle with Parmesan cheese, then bake for 15 minutes, or until golden and baked through. '),
(23, 'Garlic Bread', '61b3aa39d0fe05.74231298.png', 2, 'Argonian', 'Baked', 5, 15, 'Nothing pairs with a nice hearty soup quite like a slice or two of thick bread topped with butter and garlic. This easy and quick recipe makes enough for surprise guests or a whole family, and as an added bonus, garlic is good for your health, stamina, and magicka.', '1 (16-ounce) loaf Italian bread||\r\n½ cup (1 stick) salted butter, softened||\r\n3 cloves garlic, minced||\r\n1 tablespoon fresh parsley, chopped fine||\r\n¼ cup grated Parmesan cheese||', '1. Preheat the oven to 350°F and set out a large baking sheet. Slice the loaf of bread into pieces about 1 inch thick and place these on the baking sheet. In a small bowl, combine the butter, garlic, and parsley. For a stronger flavor, let the butter and garlic sit together for a few hours before spreading. \r\n||\r\n2 . Spread the mixture evenly onto each slice of bread, then bake for about IO minutes, or until the butter has soaked into the bread. \r\n||\r\n3. Remove from the oven and turn on the broiler. Sprinkle the Parmesan cheese on top of each slice, then place under the broiler for a few minutes, until the cheese is melted and slightly golden. Serve right away. '),
(24, 'Cabbage Biscuits', '61b3ad131ef1d5.00341998.png', 5, 'Dunmer', 'Baked', 30, 110, 'Although Balmora has since been destroyed, many Dunmer remembers the good eating that could be enjoyed when visiting House Hlaalu&#039;s stronghold. These delicious biscuits make the best of Morrowind ingredients such as scrib cabbage. Heavily textured, but lightly flavored, they are a great base for a variety of toppings or a&#039;s an accompaniment to a hearty soup.', '½ small green cabbage (about I pound)||\r\n2 teaspoons coarse salt||\r\n1 tablespoon vegetable oil||\r\nPinch of black pepper||\r\n¼ cup (½ stick) salted butter||\r\n½ cup whole milk||\r\n2 teaspoons granulated sugar||\r\n1 teaspoon instant dry yeast||\r\n2 ½ cups all-purpose flour or more as needed||\r\n1 egg||\r\n1 tablespoon heavy cream||', '1. Finely shred the cabbage using a food processor or a grater. Toss the cabbage with the coarse salt and let sit in a strainer over a large bowl for 30 minutes to I hour to drain. Afterward, squeeze the cabbage to extract even more water, then discard the excess liquid. \r\n||\r\n2. Heat the vegetable oil over medium heat in a medium saute pan or skillet, then gently cook the shredded cabbage with the black pepper until slightly browned, about 10 to 15 minutes. \r\n||\r\n3. Transfer the cabbage to a medium bowl, stir in the butter until it&#039;s melted, then pour the milk over. Add the sugar, then the yeast, followed by the egg, then stir together. Gradually mix in enough flour until you have a nice dough that pulls away from the sides of the bowl. \r\n||\r\n4. Knead for several minutes, until the dough bounces back when poked, then cover with a towel and place in a warm spot to rise for about I hour, until the dough has risen by at least half \r\n||\r\n5. Preheat the oven to 350°F. Roll the dough out to roughly¾ inch thick, then score it in a checkered pattern with a sharp knife. Cut into rounds that are roughly 2 to 3 inches across and place on the baking sheet. Allow the biscuits to rise again, this time for about 20 minutes. Brush the tops with heavy cream, then bake for about 20 minutes, until the tops are a golden brown. Best enjoyed the same day '),
(25, 'Apple Cabbage Stew', '61b3baa6192de1.19098611.png', 3, 'Redguard', 'SoupsNStews', 10, 30, 'The Imperials prefer a version of this dish that uses red cabbage, which they say is sweeter, but true N ords are unwavering in their affection for this traditional recipe. It produces a richly flavored broth that is both nutritious and delicious, despite the limited ingredient list. ', '2 tablespoons unsalted butter||\r\n1 leek, white parts only, sliced thin||\r\n½ head green cabbage, chopped thin||\r\n1 teaspoon dried thyme, plus more for garnishing||\r\n6 cups chicken broth||\r\n1 or 2 apples, red or green, cored and diced||', '1. Melt the butter in a large saute pan and add the leeks. Cook for a few minutes, until soft and just shy of browning, then add the cabbage. \r\n||\r\n2. Cook for about 10 minutes or until the cabbage has softened considerably. Add the thyme and broth, followed by the apple. Cook· for about 15 minutes more, until the apples are softened to your taste. Garnish with an extra sprinkle of thyme to serve. '),
(26, 'Coastal Clam Chowder', '61b3bcc376f650.01900369.png', 5, 'Nord', 'SoupsNStews', 5, 60, 'Nordic barnacles, clams, oysters, mudcrabs, and a variety of fish are often included in this chowder, depending on the catch of the day. Unsurprisingly, it&#039;s a popular staple in coastal cities such as Solitude and Winterhold, where every inn and tavern has a steaming cauldron of chowder going in the kitchen. ', '¼ pound bacon, diced||\r\n2 medium russet or 2 large||\r\nyellow potatoes, peeled and diced||\r\n1 leek, white and light green parts sliced||\r\nOne ro-ounce can of baby clams or canned seafood mix, with their juices||\r\n1 teaspoon Imperial Seasoning||\r\n2 cups fish broth||\r\n2 to 4 cups water, as needed||\r\n2 tablespoons unsalted butter||\r\n2 tablespoons all-purpose flour||\r\n1 cup whole milk||', '1. Cover the bottom of a large saucepan with the bacon, followed by layers of the \r\npotatoes, leeks, and clams or seafood mix with their juice. Sprinkle the Imperial \r\nSeasoning over the top then pours in the fish broth. Add enough water until all of \r\nthe ingredients are covered. and set over medium heat to cook for about 30 minutes, \r\nuntil potatoes are soft and flavors have melded together. \r\n||\r\n2. In a small saucepan over medium heat, melt the butter and stir in the flour. \r\nWhile whisking, add the milk and stir until it thickens·. Pour this into the large \r\npan with all the other ingredients and cooks for 10 more minutes to thicken the \r\nbroth. \r\n||\r\nTip:\r\nFor a slightly more sophisticated version, cook some additional bacon to be \r\nextra-crispy, crumble it, and add it as a garnish just before serving. '),
(27, 'Braised Rib Stew With Farro', '61b3bf13af04a0.02545011.png', 5, 'Altmer', 'SoupsNStews', 15, 120, 'This is one of Skyrim&#039;s most rustic soups, made in the far-flung small villages and  hunting camps that lie a long way from cities, where only the most adventurous might wander nd every bit of food is considered precious, with nothing wasted. The rib bones  nocking about at the bottom of the pot might seem a little dubious, but they give the broth  extra nutrients that are essential for surviving long spells of frigid temperatures. This  ish is especially helpful during recovery if one has taken a farro in the knee. ', '2 pounds beef short ribs||\r\n1 tablespoon olive oil||\r\n¼ cup port wine||\r\n5 cups beef stock||\r\n1 or 2 medium carrots, peeled and diced||\r\n1 or 2 medium parsnips, peeled and diced||\r\n2 cloves garlic, minced||\r\n½ cup farro or barley||\r\nSalt and pepper||', '1. Season the ribs liberally with salt and pepper. Add the oil to a medium saucepan over medium heat, then brown the ribs in the bottom of the pot. Pour in the port wine, followed by the stock. Bring to a boil and cook with the pot partially covered, for about 1 hour, occasionally skimming off excess fat from the top. \r\n||\r\n2 . Add the carrots, parsnips, leeks, garlic, and the farro or barley, 1 leek, white and light green then cook for 1 hour more, or until the grains are tender and the meat has begun falling from the bone. At this point, if you like, you can pull the meat out, cut it into smaller chunks, and then add it parts sliced back into the stew. \r\n||\r\n3. This soup, like many, is best the next day when flavors have been allowed to mingle. Place the soup in the refrigerator overnight. Then before reheating the next day, skim any remaining fat from the top of the pot. '),
(28, 'Potato Cheddar Soup', '61b3c020638987.57775173.png', 3, 'Breton', 'SoupsNStews', 10, 30, 'This dish is a staple at every farmstead and crofter&#039;s cottage across Skyrim. Simple but hearty, it gives a bone-deep warmth that better prepares anyone for the day&#039;s labors ahead, be they adventuring, tending a shop, or working the fields. ', '2 tablespoons unsalted butter||\r\n1 small onion, minced||\r\n2 tablespoons all-purpose flour||\r\n2 cups chicken broth, plus more as needed||\r\n½ cup whole milk||\r\n3 or 4 medium russet potatoes, peeled and cubed (about 1 pound)||\r\n½ cup shredded cheddar cheese||\r\n1 teaspoon Stormcloak Seasoning (page 25)||\r\n½ cup heavy cream cooked, crumbled bacon for garnishing (optional)||', '1. Melt the butter in a medium saucepan over medium heat. Add the onion and cook for several minutes, until the onion is soft and fragrant. Sprinkle the flour in and stir to combine before continuing to cook for a few minutes more, until the flour is fully incorporated. \r\n||\r\n2. Add the chicken broth and milk, followed by the cubed potatoes. Turn up the heat so the mixture simmers, and cook until the potatoes are quite soft, about 15 minutes. Using an immersion blender or a potato masher, blend the soup until it is an even texture. Add the cheddar cheese, Stormcloak Seasoning, and just enough of the cream to get the consistency you like. Ladle into serving dishes and top with crumbled bacon, if desired. \r\n||\r\nTips:\r\nThis recipe can easily be scaled up by simply adding roughly one additional potato\r\nfor each serving, and increasing the liquid and cheese accordingly.'),
(29, 'Seared Nordic Barnacles', '61b3c146a04652.00052499.png', 5, 'Nord', 'Main_Courses', 20, 20, 'Most Nords, from Solitude to Windhelm, have at some point or another gone out to scour the coast for barnacles and oysters. Those hard shells hide delicious treasures, if you know how to prepare them, and their relative rarity makes them a highly sought-after ingredient. ', '2 teaspoons crushed juniper berries||\r\n1 cup white wine||\r\nSplash of apple cider vinegar or white wine vinegar||\r\n1 pound sea scallops||\r\n2 or 3 bacon strips||\r\n6 tablespoons unsalted butter||\r\n2 cloves garlic, minced||\r\n2 tablespoons maple syrup||', '1. In a large bowl, combine the juniper berries, white wine, and vinegar to create a marinade. Add the scallops, turning to coat. Let sit for about 20 minutes while you prepare the bacon. \r\n||\r\n2 . In a medium saute pan or skillet over medium heat, cook the bacon until crispy. Transfer the bacon to paper towels to drain, then crumble into a small bowl and set aside. Drain the fat from the pan. \r\n||\r\n3. When you&#039;re ready to cook the scallops, melt the butter in the pan over medium heat. Remove the scallops from the marinade, reserving the liquid. Arrange some of the scallops in the pan, flat-side down, leaving some space in between them. Sear until they are a nice golden brown, roughly 3 minutes. Flip the scallops and cook for another 3 minutes to brown the other side. Remove to a separate plate and cook the rest of the scallops until all of the scallops have been cooked. Set aside while you finish up the sauce. \r\n||\r\n4. Add the garlic to the pan and cook until fragrant and golden brown, about 3 minutes. Add the reserved marinade liquid along with the maple syrup and simmer until the sauce is somewhat reduced and thickened, about 3 to 5 minutes. \r\n||\r\n5. To serve, sprinkle the crumbled bacon on a plate and set the scallops on top. Drizzle the sauce over the scallops. '),
(30, 'Bake White River Salmon', '61b3c80bdd8cd2.88911155.png', 5, 'Imperial', 'Main_Courses', 15, 30, 'Salmon can be seen leaping up the current of the White River in great numbers, making them a popular ingredient for cooking. There are myriad ways to catch them-arrows and bolts work well, but a skillfully deployed destruction spell can yield a number of fish quickly. Simply baking the fish with some herbs will result in a delicious meal, but nobles often prefer it baked into a pastry case. ', '3 tablespoons butter||\r\n1 leek, diced||\r\nI to 2 medium carrots, diced||\r\n¼ cup heavy cream||\r\n½ teaspoon Stormcloak Seasoning, plus a little extra pepper to taste||\r\n2 to 3 tablespoons grated Parmesan cheese||\r\nI sheet puff pastry, thawed||\r\n1 pound salmon fillet||\r\n1 egg, beaten||', '1. Begin by melting the butter in a medium saucepan over medium heat. Add the diced leek and carrots to the pan and cook for around 15 minutes, until the leeks are soft and the carrots are beginning to soften. Pour in the heavy cream then sprinkle in the ½ teaspoon of Storm cloak Seasoning and pepper. Let the mixture simmer for a minute or two until the cream has cooked down a bit and has been partially absorbed. Remove from heat and stir in the cheese. Set aside to cool. \r\n||\r\n2. Preheat the oven to 375°F and line a baking sheet with parchment paper. \r\n||\r\n3. Lay the puff pastry dough on a lightly floured surface. Roll out the dough a bit until you have a rectangle that is large enough to wrap around the whole salmon fillet. Sprinkle the remaining Stormcloak Seasoning over the middle of the dough, then place the salmon on top of the seasoning. Spread the vegetable mixed evenly over the fish, then brush the edges of the dough with the beaten egg. Fold the long sides of the pastry over the fish and vegetables, overlapping the pastry in the middle, then press the egg-washed seam together. Brush the sides of the pastry with egg and tuck them over the top seam toward the middle as far as they will go, also pressing them down. \r\n||\r\n4. Gently flip the salmon onto the prepared baking sheet so that the seam is facing down. Lightly score the top of the dough only partway through with a sharp knife, then brush with the remaining egg. Bake for about 25 to 30 minutes, until the top is a nice golden brown. Let cool for a few minutes before slicing and serving. '),
(31, 'Chicken Dumplings', '61b3cccd19d1d6.27905285.png', 6, 'Khajiit', 'Main_Courses', 60, 30, 'These dumplings are a specialty of many an inn across Skyrim, where travelers can enjoy them hot after a long day&#039;s journey, but they&#039;re also a popular pick in one&#039;s own homestead kitchen. In either case, the creamy filling has restorative properties, especially washed down with a flagon of the local specialty. ', '6 chicken drumsticks (about 2 cups cooked meat)\r\n2 tablespoons butter\r\n1 leek, both white and light green parts sliced into thin half-moons\r\n1 or 2 cloves garlic, minced\r\n1 medium carrot, peeled and diced\r\n½ teaspoon Stormcloak Seasoning\r\n1 tablespoon all-purpose flour\r\n¾ cup heavy cream\r\n¼ cup shredded cheddar cheese\r\nSalt and pepper\r\n1 recipe Rye Pie Dough\r\n1 egg, beaten, for glazing', '1. Preheat the oven to 375°F and place the drumsticks on a baking sheet. Bake for 30 minutes, then flip and return to the oven for another 30 minutes, until cooked through. \r\n||\r\n2. While the drumsticks cook, melt the butter in a large saute pan or skillet over medium heat, then add the leeks. Cook for several minutes, until the leeks are soft but not browning. Add the garlic, carrot, and Stormcloak Seasoning, and cook for another couple of minutes, until the carrots have softened a bit. Sprinkle the mixture with flour, then stir to combine completely. Gradually pour in the heavy cream, stirring all the while, and when you have a nice thick consistency, remove from the heat and stir in the cheese. Season with salt and pepper to taste. \r\n||\r\n3. When the chicken is done cooking, strip the meat from the bones and tear it into small pieces. Add these to the cream filling mixture, stirring to incorporate. Lower the oven to 350°F. \r\n||\r\n4. Roll out the Rye Pie Dough to ½ of an inch thick and shape it into a rough square. Cut the dough into 4 even squares, adding a little dough here and there if needed to maintain the shape. \r\n||\r\n5. Working one at a time, lay a square of dough out on a clean baking sheet lined with parchment paper. Divide the filling into 4 equal portions, and scoop one portion onto the square of dough, spreading it out evenly but leaving at least ½ inch bare around the edges. \r\n||\r\n6. Dampen those bare edges with a little water, then take 2 of the corners and fold them toward the middle. Pinch together, then repeat with the other 2 corners. This should create seams that you can pinch closed. Repeat with the remaining dough and filling. \r\n||\r\n7. Brush the dumplings with the beaten egg and bake for about 30 minutes, or until the tops are just starting to turn golden. Allow cooling slightly before enjoying. \r\n||\r\nTips: \r\nYou can skip the first step of this recipe if you already have leftover chicken. You&#039;ll need about 2 cups. ');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `uID` int(11) NOT NULL,
  `u_firstName` varchar(128) NOT NULL,
  `u_lastName` varchar(128) NOT NULL,
  `u_username` varchar(128) NOT NULL,
  `u_email` varchar(128) NOT NULL,
  `u_pwd` varchar(128) NOT NULL,
  `u_isAdmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`uID`, `u_firstName`, `u_lastName`, `u_username`, `u_email`, `u_pwd`, `u_isAdmin`) VALUES
(1, 'Sylar', ' Li', 'owosas', 'zl484@drexel.edu,', 'adminSylar_', 1),
(2, 'Amanda', 'Ma', 'wontonMa', 'atm99@drexel.edu', 'wontonma99', 0),
(9, 'Test_fst_name', 'Test_lst_name', 'Test_username', 'testemail@gmail.com', '$2y$10$giZnX6xHc80sNXx60Hc23.9.rR7AtAzEUZxAK.EEQZD3yLoZ7mHty', 0),
(11, 'Paul', 'Phan', 'adminPaul_', 'paul.phan@drexel.edu', '$2y$10$5VNFa6QF3Yd.tV8buKkNie4YKlrzofyjODTNDjgj85DnaCTA5wlP2', 1);

--
-- 转储表的索引
--

--
-- 表的索引 `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`r_ID`);

--
-- 表的索引 `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`r_ID`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `recipe`
--
ALTER TABLE `recipe`
  MODIFY `r_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `recipes`
--
ALTER TABLE `recipes`
  MODIFY `r_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
