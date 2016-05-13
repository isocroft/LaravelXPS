class PostsControllerTests extends TestCase{


  public function __construct(){

       $this->mock = Mockery::mock('Eloquent', 'Post');

  }

  public function tearDown(){

       Mockery::close();
  
  }

  public function testIndex(){

 
        $this->mock->shouldRecieve('all')->once()->andReturn('foo');

        $this->app->instance('Posts', $this->mock);

        $response = $this->call('', 'post');

        $this->assertViewHas('posts');

        $posts = $response->original->getData()['posts'];

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $posts);


  }


}