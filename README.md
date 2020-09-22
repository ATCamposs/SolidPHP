Diz que todas as classes e etc serão chamados pelo autoloader.
<phpunit bootstrap="./vendor/autoload.php">


Nomeia um projeto de testes e diz qual pasta será utilizada por ele
<testsuites>
    <testsuite name="Testes do projeto">
        <directory>./tests</directory>
    </testsuite>
</testsuites>