create table usuario (
    id_usuario          int primary key identity,
    usuario             varchar(250),
    senha               varchar(250)
)

-----------------------------------------------------------------------------

create table passeio (
    id_passeio          int primary key identity,
    nome                varchar(100),
    local_              varchar(100),
    duracao             varchar(100),
    valor               decimal(6,2),
    descricao           varchar(250)
)

-----------------------------------------------------------------------------

create table produto (
    id_produto          int primary key identity,
    nome                varchar(250),
    valor               varchar(250),
    quantidade          int,
    obs                 varchar(3000)
)

-----------------------------------------------------------------------------

create table barco (
    id_barco            int primary key identity,
    nome                varchar(250),
    proprietario        varchar(250),
    comprimento        varchar(250),
    capacidade          int,
    ano                 int
)

-----------------------------------------------------------------------------

create table agenda (
    id_agenda           int primary key identity,
    dia                 varchar(50),
    hora                varchar(50),
    tempo               varchar(50)
    --Chave barco--
)

----------------------------------------------------------------------------

create table pousada (
    id_pousada          int primary key identity,
    nome_responsavel    varchar(250),
    nome_fantasia       varchar(250),
    cnpj                varchar(50),
    email               varchar(250),
    telefone            varchar(50),
    rua                 varchar(250),
    bairro              varchar(250),
    cidade              varchar(250),
    estado              varchar(250),
    credito             varchar(250),
    valor_total         decimal(6,2),
    desconto            int,
    qtd_barco           int
    --Chave do usuario--
)

-------------------------------------------------------------------

create table cliente (
    id_cliente          int primary key identity,
    nome                varchar(250),
    rg/cpf              varchar(50),
    email               varchar(250),
    telefone            varchar(250)
)

----------------------------------------------------------------

create table parceiro (
    id_parceiro         int primary key identity,
    nome                varchar(250),
    rg_cpf              varchar(250),
    telefone            varchar(50),
    email               varchar(250)
)

-----------------------------------------------------------------

create table venda (
    id_venda int primary key identity,
    --Chave pousada --
    --Chave passeio--
    --Chave barco--
    --Chave produto--
    --Chave agenta--
)