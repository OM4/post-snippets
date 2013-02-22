<?php
/**
 * Post Snippets Unit Tests.
 */
class PostSnippetsTest extends WP_UnitTestCase {

    private $plugin = 'post-snippets';

    public function setUp()
    {
        parent::setUp();
    }

	// protected	$post_snippets;
	// public		$plugin_slug = 'post-snippets';

	/**
	 * setUp runs before each test to create a Fixture.
	 *
	 * The method should have protected access, but because WP_UnitTestCase
	 * doesn't define it that way we'll stick with public.
	 */
	// public function setUp_old() {
		// parent::setUp();
		// $this->post_snippets = new Post_Snippets();
		// global $post_snippets; $post_snippets = new Post_Snippets();

		// $snippets = array();
		// array_push($snippets, array(
		//     'title' => "TestTmp",
		//     'vars' => "",
		//     'description' => "",
		//     'shortcode' => false,
		//     'php' => false,
		//     'snippet' => "A test snippet..."));
		// 	update_option('post_snippets_options', $snippets);
	// }


	// -------------------------------------------------------------------------
	// Tests
	// -------------------------------------------------------------------------

    public function testPluginInitialization()
    {
        $this->assertFalse( null == $this->plugin );
    }

	public function teast_Yo()
	{
		$this->assertTrue(true);
	}

	public function teast_Yos()
	{
		$this->assertTrue(true);
	}

	/**
	 * @dataProvider	provider
	 */
	public function teast_data_inline($a, $b, $c)
	{
		// var_dump($c);
	}
	public function praovider()
	{
		return array(
			array(0, 0, 0),
			array(0, 1, 1),
			array(1, 0, 1),
			array(1, 1, 3)
		);
	}

	public function test_get_post_snippet()
	{
		$test = get_post_snippet('TestTmp');
		$this->assertTrue(is_string($test));
		$this->assertEquals($test, 'A test snippet...');
	}
}
