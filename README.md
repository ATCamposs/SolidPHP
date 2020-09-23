S
O
L
I
D


Single responsability


Um metodo jamais deve ter mais de um fim ou proposito
ex: um objeto não deve armazenar registros E salvar OU imprimir estes dados, esses metodos devem ser passados para outros objetos.(de uma maneira mais pratica podemos dizer metodos no lugar de objetos/classes).


Open Closed


open closed principle aplicado, as entidades estão abertas para extensão mas fechadas para modificação.
Uma classe não deve depender da outra.
podendo usar interfaces e classes abstratas para definir um tipo
padrão strategy(interface)
ou padrão Template Method(Abstract)
um exemplo pode ser visto na pasta connection e arquivo Conexao.php


Liskov Substituition


Subtipos devem ser substituiveis por seus tipos base.
Um quadrado é um tipo de retângulo, mas não pode ser substituido pelo retângulo, ele quebra o principio de liskov.

Um exemplo que não está seguindo o principio de liskov é o do Area.php, um quadrado e retangulo trazem informações diferentes entre si que não podem ser utilizadas para o mesmo fim.


Interface Segregation Principle


Nenhum cliente deve ser forçado a depender de métodos que não use.
Podemos e devemos criar interfaces menores e mais simples, mesmo que com métodos duplicados.
Exemplo de codigo pode ser visto na pasta passaros, onde mais de uma interface foi criada para evitar a criação de metodos vazios.


Dependency Inversion


Modulos de alto nivel não deveriam depender de modulos de baixo nivel. Ambos deveriam depender de abstrações.
Abstrações não podem depender de detalhes, detalhes devem ser abstrações.

Um exemplo pode ser visto ao utilizarmos a abstração DbInterface no metodo connect dentro da Connection.php

isso faz com que a classe connection não seja dependente de outra classe(Mysql por ex) e não esteja fortemente acoplada, pois esta ligada somente a abstração DbInterface

Se não estivesse assim precisariamos chamar diversas vezes a classe para poder usar uma classe interna acoplada nela, oque gera forte dependencia.


