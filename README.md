Diz que todas as classes e etc serão chamados pelo autoloader.
<phpunit bootstrap="./vendor/autoload.php">


Nomeia um projeto de testes e diz qual pasta será utilizada por ele
<testsuites>
    <testsuite name="Testes do projeto">
        <directory>./tests</directory>
    </testsuite>
</testsuites>


open closed principle aplicado, as entidades estão abertas para extensão mas fechadas para modificação.
Uma classe não deve depender da outra.
podendo usar interfaces e classes abstratas para definir um tipo
padrão strategy(interface)
ou padrão Template Method(Abstract)
um exemplo pode ser visto na pasta connection e arquivo Conexao.php