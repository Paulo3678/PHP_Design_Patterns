# Strategy

O Strategy é um padrão de projeto comportamental que permite que você defina uma família de 
algoritmos, coloque-os em classes separadas, e faça os objetos deles intercambiáveis.

Ele sugere que você pegue uma classe que faz algo específico em diversas maneiras diferentes e extraia todos esses algoritmos para classes separadas chamadas estratégias.

A classe original, chamada contexto, deve ter um campo para armazenar uma referência para uma dessas estratégias. O contexto delega o trabalho para um objeto estratégia ao invés de executá-lo por conta própria.

O contexto não é responsável por selecionar um algoritmo apropriado para o trabalho. Ao invés disso, o cliente passa a estratégia desejada para o contexto. Na verdade, o contexto não sabe muito sobre as estratégias. Ele trabalha com todas elas através de uma interface genérica, que somente expõe um único método para acionar o algoritmo encapsulado dentro da estratégia selecionada.

Desta forma o contexto se torna independente das estratéias concretas, então você pode adicionar novos algoritmos ou modificar os existentes sem modificar o código do contexto ou outas estratégias.

# Chain of Responsibility

O Chain of Responsibility é um padrão de projeto comportamental que permite que você passe pedidos por uma corrente de handlers. Ao receber um pedido, cada handler decide se processa o pedido ou o passa adiante para o próximo handler na corrente.

O Chain of Responsibility se baseia em transformar certos comportamentos em objetos solitários chamados handlers.

O padrão sugere que você ligue esses handlers em uma corrente. Cada handler ligado tem um campo para armazenar uma referência ao próximo handler da corrente. Além de processar o pedido, handlers o passam adiante na corrente. O pedido viaja através da corrente até que todos os hanlder tiveram uma chance de processá-lo.

Um handler pode decidir passar o pedido adiante na corrente e efetivamente para qualquer futuro processamento.

# Template Method

O Template Method é um padrão de projeto comportamental que define o esqueleto de um algoritmo na superclasse mas deixa as subclasses sobrescreverem etapas específicas dos algoritmos sem modificar sua estrutura.

O padrão sugere que você quebre um algoritmo em uma série de etapas, transforme essas etapas em métodos, e coloque uma série de chamadas para esses métodos dentro de um único método padrão. As etapas podem ser tanto abstratas, ou ter alguma implementação padrão. Para usar o algoritmo, o cliente deve fornecer sua própria sublcasse, implementar todas as etapas abstratas, e sobrescrever algumas das opcionais se necessário (mas não o próprio método padrão).

# State

Devido à natureza do PHP, de não se manter executando entre requisições HTTP, o padrão State não é tão utilizado, mas ainda pode ser implementado e bastante útil em alguns casos.

O State é um padrão de projeto comportamental que permite que um objeto altere seu comportamento quando seu estado interno muda. Parece como se o objeto mudasse de classe.

O padrão sugere que você crie novas classes para todos os estados possíveis de um objeto e extraia todos os comportamentos específicos de estados para dentro dessas classes.

Ao invés de implementar todos os comportamentos por conta própria, o objeto original, chamado contexto, armazena uma referência para um dos objetos de estado que representa seu estado atual, e delega todo o trabalho relacionando aos estados para aquele objeto.

Para fazer a transição do contexto para outro estado, substitua o objeto do estado ativo por outro objeto que represente o novo estado. Isso é possível somente se todas as classes de estados seguirem a mesma interface e o próprio contexto funcione com esses objetos através daquela interface.

Essa estrutura pode ser parecida com o padrão Strategy, mas há uma diferença chave. No padrão State, os estados em particular podem estar cientes de cada um e iniciar transições de um estado para outro, enquanto que strategies quase nunca sabe sobre as outras strategies.

# Command

O Command é um padrão de projeto comportamental que transforma um pedido em um objeto independente que contém toda a infomação sobre o pedido. Essa transformação permite que você arametrize métodos com diferentes pedidos, atrase ou coloque a execução do pedido em uma fila, e suporte operações que não podem ser feitas.

Um bom projeto de software quase sempre se baseia no princípio de separação de interesses o que geralmente resulta em dividir a aplicação em camadas. O exemplo mais comum: uma camada para a interface gráfica do usuário e outra camada para a lógica do negócio. A camada GUI é responsável por renderizar uma bonita imagem na tela, capturando quaisquer dados e mostrando resultados do que o usuário e a aplicação estão fazendo. Conteudo, quando se trata de fazer algo importante, como calcular a trajetória da la ou compor um relatório anual, a camada GUI delaga o trabalho para a camada inferior da lógica do negócio.

Dentro do código pode parecer assim: Um objeto GUI chama um método da lógica do negócio, passando alguns argumentos. Este processo é geralmente descrito como um objeto mandando um pedido para outro.

O padrão Command sugere que os objetos GUI não enviem esses edidos diretamente. Ao invés disso, você deve extrair todos os detalhes do pedido, tais como o obheto a ser chamado, o nome do método, e a lista de argumentos em uma classe comando separada que tem apenas um método que aciona esse pedido.

Objetos comando servem como links entre vários objetos GUI e de lógica de negócio. De agora em dante, o obejeto GUI não precisa saber qual objeto de lógica do negócio irá receber o pedido e como ele vai ser processado. O obhet GUI deve acionar o comando, que irá lidar com todos os detalhes.

O próximo passo é fazer seus comandos implementarem a mesma interface. Geralmente é apenas um método de execução que não pega parâmetros. Essa interface permite que você use vários comandos com o mesmo remetente do pedido, sem acoplá-lo com as classes concretas dos comandos. Como um bônus, agora você pode trocar os objetos comando ligados ao remetente, efetivamente mudando o comportamento do remetente no momento da execução.

Você pode ter notado uma peça faltante nesse quebra cabeças, que são os parâmetros do pedido. Um objeto GUI pode ter fornecido ao objeto da camada de negócio com alguns parâmetros, como deveremos passar os detalhes do pedido para o destinatário? O comando deve ser pré-configurado com esses dados, ou ser capaz de obtê-los por conta própria.

# Observer

O Observer é um padrão de porjeto comportamental que permite que você defina um mecanismo de assinatura para notificar múltiplos objetos sobre quaiquer eventos que aconteçam com o bjeto que eles estão observando.

O objeto qe tem um estado interessante é quase sempre chamado de subject, mas já que ele também vai notificar outros objetos sobre as mudanças em seu estado, nós vamos chamá-lo de publisher. Todos os outros objetos que querem saber das mudanças do estado do publicador são chamados de assinantes.

O padrão Obserer sugere que você adicione um mecanismo de assinatura para a classe publicadora para que objetos individuais possam assinar ou dessassinar uma corrente de eventos vindo daquela publicadora. Nada tema! Nada é complicado como parece. Na verdade, esse mecanismo consistem em:
1) Um vetor para armazenar uma lista de referências aos objetos do assinante 
2) Alguns métodos públicos que permitem adicionar assinantes e removê-los da lista

Agora, sempre que um eveto importante acontece com a publicadora, ele passa para seus assinantes e chama um método específico de notificação em seus objetos.

Aplicações reais podem ter dúzias de diferentes classes assinantes que estão interessadas em acompanhar eventos da mesma classe publicadora. Você não iria querer acoplar a publicadora a todas essas classes. Além disso, você pode nem estar ciente de algumas delas de antemão se a sua classe publicadora deve ser usada por outra pessoa.

É por isso que é crucial que todos os assinantes implementem a mesma interface e que a publicadora comunique-se com eles aenas através daquela interface. Essa interface deve declarar o método de notificação junto com um conjunto de parâmetros que a publicadora pode usar para passar alguns dados contextuais junto com a notifiação.