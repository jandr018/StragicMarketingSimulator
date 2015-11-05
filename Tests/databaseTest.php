<?php

require '../Model/database.php';
class databaseTest extends \PHPUnit_Framework_TestCase
{
	 
     /*
	  public function test__constructInvalidPar()
    {
        $m = new database('EUR');
        $this->assertInstanceOf(database::class, $m);
        return $m;
    }
	
     
	 public function test__construcValidPar()
    {
        $m = new database();
        $this->assertInstanceOf(database::class, $m);
        return $m;
    }
	 
     
	public function test_searchForStudentsFound()
	{
		$db = new database();
		return $this->assertEquals(count($db->searchForStudents("jcarm012@fiu.edu")), 10);
				
		
	}
	 
     
	public function test_searchForStudentsNotFound()
	{
		$db = new database();
		return $this->assertEquals(count($db->searchForStudents("beaver")), 0);
				
		
	}
	 
     
	public function test_getStudentFound()
	{
		$db = new database();
		return $this->assertEquals(count($db->getStudent("2654698")), 10);
				
		
	}
	 
     
	
	public function test_getStudentNotFound()
	{
		$db = new database();
		return $this->assertEquals(count($db->getStudent("stickle")), 0);
				
		
	}
	 
     
	
	public function test_addStudent()
	{
		
	

		$db = new database();
		return $this->assertEquals($db->addStudent(1651248, "ricky", "roberts", "Ricke@roberts.com", 0, 1253481, "where am I", "everywhere", -5), "pass");
				
		
	}
	 
     
	public function test_genPass()
	{
			$pwd = "somePass1234";
			$email = "some@email.com";
			$db = new database;
			$db2 = new database;
			
			
			$this->assertEquals($db->genPass($pwd, $email),$db2->genPass($pwd, $email));
	}
	
     
	
	public function test_updateStudentPassword()
	{
		$email = "jcarm012@fiu.edu";
		
		
		$db = new database();
		
		$pwd = $db->genPass($email, "Jeff_1230");
		
		$this->assertEquals ($db->updateStudentPassword($email, $pwd), "pass");
	
	}
	
     
	
	public function test_updateStudentPasswordInValid()
	{
		$email = "jcarm012@fiu.edu";
		
		
		$db = new database();
		$this->assertEquals($db->updateStudentPassword($email, 'NULL'), "pass");
	
	}
	
     
	
	public function test_addGameValid()
	{
		//public function addGame($semester,$courseID,$section,$schedule,$isActive,$courseNumber)
		$db = new database();
		$semester = "TestSemester";
		$courseID = "1234567Test";
		$schedule = "3:45-5 Test";
		$section = "abcdSectionTest";
		$isActive = -5;
		$courseNumber = "TestCourseNumber";
		
		$this->assertEquals($db->addGame($semester,$courseID,$section,$schedule,$isActive,$courseNumber), "pass");
		
		
	
	}
	
     
	public function test_addGameinValid()
	{
		$db = new database();
		$semester = "TestSemester";
		$courseID = "1234567Test";
		$schedule = "3:45-5 Test";
		$section = "abcdSectionTest";
		$isActive = -5;
		$courseNumber = "TestCourseNumber";
		
		$this->assertEquals($db->addGame($semester,$courseID,$section,$schedule,NULL,$courseNumber), "fail");
		
	
	}
	
	
	
     
	
	public function test_updateAdminPasswordValid()
	{
		$email = "test@test.com";
		$password = "NewTestPassword";
		$db = new database();
		$this->assertEquals($db->updateAdminPassword($email,$password), 'fail');
		
	}
	
     
	public function test_updateAdminPasswordinValid()
	{
		$email = "test@test.com";
		$password = "NewTestPassword";
		$db = new database();
		$this->assertEquals($db->updateAdminPassword($email,NULL), 'fail');
	}
	
	
     
	public function test_setStudentActiveValid()
	
	{  // (1651248, "ricky", "roberts", "Ricke@roberts.com", 0, 1253481, "where am I", "everywhere", -5), "pass");
		$email = "Ricke@roberts.com";
		$isActive = rand(2,10);
		$db = new database();
		$this->assertEquals($db->setStudentActive($email,$isActive), 'pass');
	}
	
     
	public function test_setStudentActiveinValid()
	
	{
		$email = "Ricke@roberts.com";
		$isActive = "not an int";
		$db = new database();
		$this->assertEquals($db->setStudentActive($email,NULL), 'fail');
	}
	
	
     
	public function test_AdminActiveValid()
	
	{
		$email = "test@test.com";
		$isActive = rand(1,10);
		$db = new database();
		$this->assertEquals($db->setStudentActive($email,$isActive), 'pass');
		
	}
	
     
	
	public function test_AdminActiveinValid()
	
	{
		$email = "test@test.com";
		$isActive = "not an int";
		$db = new database();
		$this->assertEquals($db->setStudentActive($email,$isActive), 'fail');
	}
	
     
	function test_updateStudentHotelValid()
	{
		$student = "jcarm012@fiu.edu"; $hotel = 100;
		$db = new database();
		$this->assertEquals($db->updateStudentHotel($student,$hotel), true);
		
	}
	
     
	function test_updateStudentHotelInValid()
	{
		$student = "jcarm012@fiu.edu"; $hotel = 52;
		$db = new database();
		$this->assertEquals($db->updateStudentHotel($student, NULL), false);
	}
	
	
     
	function test_getGameValid()
	
	{
		$game = 1;
		$db = new database();
		
			return $this->assertEquals(count($db->getGame($game)), 7);
		
	}
	
     
	function test_getGameinValid()
	
	{
		$game = -1;
		$db = new database();
		return $this->assertEquals(count($db->getGame($game)), 0);
	}
	
	
     
	function test_getGroupValid()
	
	{
		$group = 46;
		$db = new database();
		
		return $this->assertEquals(count($db->getGroup($group)), 10);
	}
	
     
	function test_getGroupinValid()
	
	{
		$group = -1;
		$db = new database();
		
			return $this->assertEquals(count($db->getGroup($group)), 0);
	}
	
     
	function test_getGameByCourseValid()
	
	{		$course = 75648;
	
			$db = new database();
		
			return $this->assertEquals(count($db->getGameByCourseNumber($course)), 7);
	
	}
	
     
	function test_getGameByCourseinValid()
	
	{
		$course = 75699;
	
			$db = new database();
		
			return $this->assertEquals(count($db->getGameByCourseNumber($course)), 0);
	
	
	}
	
     
	function test_getLocationValid()
	
	{
		$loc =12345;
		$db = new database();
		
			return $this->assertEquals(count($db->getLocation($loc)), 2);
	
		
	}
	
     
	function test_getLocationinValid()
	
	{
	$loc =123456;
		$db = new database();
		
			return $this->assertEquals(count($db->getLocation($loc)), 0);
	
	}
	
     
	function test_getAllGames()
	{
		$db = new database();
		return $this->assertgreaterThan(0,count($db->getGameAllGames()));
		
	}
	
     
	
	
     
	function test_getAdvertisingValid()
	{
		$db = new database();
		return $this->assertGreaterThan(0,count($db->getadvertising()));
		
	}
	
     
	
	function test_newHotelValid()
	{  //newHotel($name, $location, $type, $game, $balance, $revenue, $rooms, $isActive)
		$db = new database();
		return $this->assertGreaterThan(0,count($db->newHotel('abc Test', 12345, "economy", 3, 50000, 35000, 50.00, -1)));
	}
	
     
	
	
	
     
	function test_SearchHotelsValid()
	{
			$name ="ABC Marketing";
			$db = new database();
		
			return $this->assertGreaterThan(0, count($db->searchHotel($name)));
	}
	
     
	function test_SearchHotelsInValid()
	{
			$name = "zzzzz";
			$db = new database();
		
			return $this->assertLessThan(1, count($db->getLocation($name)));
	}
	
     
	function test_getGroupsForGameValid()
	
	{
			$id =3;
		
			$db = new database();
		
			return $this->assertGreaterThan(0, count($db->getGroupsforGame($id)));
	}
	
     
	function test_getGroupsForGameinValid()
	
	{
			$id =-2;
		
			$db = new database();
		
			return $this->assertLessThan(1, count($db->getGroupsforGame($id)));
	}*/
	
	///////Sprint 4 tests///////
	/*	function test_getadvertisingNameAndPriceValid()
	{
		$id = 3;
		$db = new database();
		
		return $this->assertGreaterThan(0, $db->getAdvertisingNameAndPrice($id));
	
	}
	
		function test_getadvertisingNameAndPriceInvalid()
	{
		$id = 'cow';
		$db = new database();
		$count = 1;
		

			
		return $this->assertEquals('error', $db->getAdvertisingNameAndPrice($id));
	
	}
		function test_getPersonnel()
	{
		
		$id = 4;
		$db = new database();
		
		return $this->assertGreaterThan(0, $db->getPersonnel($id));
	
	}
		function test_getResearch()
	{
		
		
		$db = new database();
		
		return $this->assertGreaterThan(0, $db->getResearch());
	}
	
		

	function test_getCurrentPeriod() 
	{
		$gameID = "1";
		$db = new database();
		
		return $this->assertEquals(1, count($db->getCurrentPeriod($gameID)));
		
	}
		
	function test_getCurrentPeriodInvald() 
	{
		$gameID = "cheese";
		$db = new database();
		
		return $this->assertEquals(0, count($db->getCurrentPeriod($gameID)));
		
	}
		function test_getOTA()
	{
		$db = new database();
		
		return $this->assertGreaterThan(0, $db->getOTA());
		
	}
		function test_updateOTA()
	{
		$min = .7;
		$max = .9;
		$discount = rand($min, $max);
		$db = new database();
		
		return $this->assertEquals(true, $db->updateOTA($discount));
		
	}
		function test_updateOTAInvalid()
	{
		
		$discount = "puppies";
		$db = new database();
		
		return $this->assertEquals(false, $db->updateOTA($discount));
		
	}
	
		
	/*function updateAdvPerOrResearch($table, $id, $cost, $impact)*/
	
	function test_isDecisionTable() //good!
	{
		$periodTable = "GAME_3_P_1";
		$db = new database();
		
		
		return $this->assertEquals(1, $db->isDecisionTable($periodTable));
		
	}
	
		
	function test_isDecisionTableInvalid() //good!
	{
		$periodTable = "GAME_3_P_16"; // invalid game
		$db = new database();
		
		return $this->assertEquals(0, $db->isDecisionTable($periodTable));
		
	}
	
		function test_getDecisionsTableColumns()
	{
		
		$tableName = "GAME_3_P_1";
		$db = new database();
		
		return $this->assertGreaterThan(0, $db->getDecisionsTableColumns($tableName));
		
	}
		function test_getDecisionsTableColumnsInvalid()
	{
		
		$tableName = "GAME_3_P1"; // invalid game
		$db = new database();
		
		return $this->assertEquals(0, count($db->getDecisionsTableColumns($tableName)));
		
	}
			function test_getStudentDecisions()
	{
		$tableName = "GAME_1_P_1";
		$hotel = 46;
		$db = new database();
		return $this->assertGreaterThan(0, count($db->getStudentDecisions($tableName, $hotel)));
	}
		function test_getStudentDecisionsInvalid()
	{
		$tableName = "GAME_1_P_1";
		$hotel = 47;
		$db = new database();
		return $this->assertEquals(0, count($db->getStudentDecisions($tableName, $hotel)));
	}
	
			
	//function addDecisionsexistingTable($tableName, $gameid, $hotel, $periodNum, $advertising, $personnel, $OTA,$roomRate, $research, $adCount, $researchCount)
	
	function test_updateMarketSegment()
	{
		$segment = "luxury";
		$hotel = 47;
		$db = new database();
		return $this->assertEquals(1, count($db->updateMarketSegment($segment,$hotel)));
		
	}
	
	
		
	//function addNewPeriodDecisions($tableName, $gameid, $periodNum, $advertising, $personnel, $OTA, $research)
	
	public function test_addNews()
	
	{
		$game = 1;
		$article = "This is a small news article that could impact a game.";
		$period = 99;
		$db = new database();
		return $this->assertEquals(true, $db->addNews( $game, $article, $period));
		
	
	}
	

	public function test_addGame_period()
	
	{
		$game = 1;
		$pstart = '2016-10-20 00:00:00';
		$pend =  '2016-10-30 00:00:00';
		$isActive = 1;
		
		$db = new database();
		return $this->assertEquals('pass', $db->addGame_period( $game, $pstart, $pend, $isActive));
	}*/
	/*public function test_addNews_parameters()
	
	{
		$news_id = 99; 
		$effect = "Very Bad";
		$hotel_type = "Midrange";
		$hotel_location = 99;
		
		$db = new database();
		return $this->assertEquals(NULL, $db->addNews_parameters( $news_id, $effect, $hotel_type, $hotel_location));
	
	}*/
	
	
	/*public function test_getNews_by_id() 
	{
		$value = 2; 
		$db = new database();
		return $this->assertGreaterThan(0, count($db->getNews_by_id($value)) );
	}*/
		/*public function test_getNews_by_idInvalid() 
	{
		$value = 15; 
		$db = new database();
		return $this->assertEquals(0, count($db->getNews_by_id($value)) );
	}*/
 		/*public function test_getNews_by_game() 
	
	{
		$value = 4;
		$period = 3;
		$db = new database();
		return $this->assertGreaterThan(0, count($db->getNews_by_game($value,$period) ) );
		
	}*/
	/*	public function test_getNews_by_gameInvalid() 
	
	{
		$value = 4;
		$period = 18;
		$db = new database();
		return $this->assertEquals(NULL, $db->getNews_by_game($value,$period)  );
		
	}*/
	
  	
/*	public function getAllNews_by_game($game) 
   	
	public function getAllNews_parameters($news_id) 
  	
	public function getGame_period($value) 
 	
	public function updateNews_article($id,$article)
   	
	public function updateNews_periodNum($id,$period)
   	
	public function test_updateGame_period()
    	
	public function test_removeNews_parameters()
   	
	public function test_removeNews()
   	
	function test_getLocationByType()
	
	
	*/
	
	

	
	
	
	
	function Test_getMarketShareTable($gamePeriod)
	{
		$obj = new database();
		$game_period = "GAME_3_P_1";
		
		return $this->assertGreaterthan(0, count($obj->getMarketShareTable($game_period)));
	}
	
	function test_updateMarketShare($gamePeriod, $groupcount, $rooms, $roomsSold, $byGroup, $groups, $period)
		
	function test_createMarketShare($gamePeriod,$groupcount, $groups, $period)
	
	function Test_getGameGroupCount($game)
	
	function Test_getGameGroupsId($game)
		
	function Test_isMarketShare($marketshare) // return 0 if table doesn't already exist and array if it does.
		
	function Test_getRevenue($hotel)

	function Test_getLeaderboardTable($game)
	
	function Test_updatePurpose($purpose,$hotel){
  	
	function Test_getPeriodResearch($gamePeriod, $group)
	
	function Test_gethotelIdbyName($name)

	
	function Test_incrementGamePeriodNum($game, $period)
	
	function  Test_isMarketShareForPeriod($marketshare, $periodNum)

	function Test_addComments($game, $period, $group, $comments)

	
	public function updateStudentQuestion($email,$secretQuestion,$id)

	
	public function Test_updateAdminQuestion($email,$secretQuestion,$id)
  
	public function Test_updateStudentAnswer($email,$secretAns,$id)

	
	public function Test_updateAdminAnswer($email,$secretAns,$id)
    
	
	
	public function Test_updateStudentPassword_by_id($email,$password,$id)
   
	
	public function Test_updateAdminPassword_by_id()
 
	
}


?>


	
	
	

