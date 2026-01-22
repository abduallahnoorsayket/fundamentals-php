


final class DemoBlock extends BlockBase implements ContainerFactoryPluginInterface {


  public function __construct(
 array $config,$plugin,$id,
 private readonly Entitytype mmakarger 
  ){
Pareent::__construct ()
  }

  public static function create ()

  public function build():array{
    return['#markup' =>"hello"]
  }
}