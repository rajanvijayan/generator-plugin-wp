<?php
/**
 * <%= cptname %> Tests.
 *
 * @since   <%= version %>
 * @package <%= mainclassname %>
 */

/**
 * <%= cptname %> Tests.
 *
 * @since   <%= version %>
 */
class <%= classname %>_Test extends WP_UnitTestCase { // @codingStandardsIgnoreLine

	/**
	 * Test if our class exists.
	 *
	 * @since  <%= version %>
	 */
	public function test_class_exists() {
		$this->assertTrue( class_exists( '<%= classname %>' ) );
	}

	/**
	 * Test that we can access our class through our helper function.
	 *
	 * @since  <%= version %>
	 */
	public function test_class_access() {
		$this->assertInstanceOf( '<%= classname %>', <%= rc.prefix %>()-><%= classslug %> ); // @codingStandardsIgnoreLine
	}

	/**
	 * Test to make sure the CPT now exists.
	 *
	 * @since  <%= version %>
	 */
	public function test_cpt_exists() {
		$this->assertTrue( post_type_exists( '<%= cptslug %>' ) );
	}

	/**
	 * Replace this with some actual testing code.
	 *
	 * @since  <%= version %>
	 */
	public function test_sample() {
		$this->assertTrue( true );
	}
}
