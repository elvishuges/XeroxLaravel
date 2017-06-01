CreateUsersTable: create table `users` (`id` int unsigned not null auto_increment primary key, `name` varchar(191) not null, `sobreNome` varchar(191) not null, `email` varchar(191) not null, `password` varchar(191) not null, `remember_token` varchar(100) null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate utf8mb4_unicode_ci
CreateUsersTable: alter table `users` add unique `users_email_unique`(`email`)
CreatePasswordResetsTable: create table `password_resets` (`email` varchar(191) not null, `token` varchar(191) not null, `created_at` timestamp null) default character set utf8mb4 collate utf8mb4_unicode_ci
CreatePasswordResetsTable: alter table `password_resets` add index `password_resets_email_index`(`email`)
CreatePasswordResetsTable: alter table `password_resets` add index `password_resets_token_index`(`token`)
CreateXeroxesTable: create table `xeroxes` (`id` int unsigned not null auto_increment primary key, `nome` varchar(191) not null, `descricao` text not null, `precoFolha` double(8, 2) not null, `user_id` int not null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate utf8mb4_unicode_ci
CreateXeroxesTable: alter table `xeroxes` add constraint `xeroxes_user_id_foreign` foreign key (`user_id`) references `users` (`id`)
CreateArquivosTable: create table `arquivos` (`id` int unsigned not null auto_increment primary key, `nome` varchar(191) not null, `hash` varchar(191) not null, `dataDeBusca` date not null, `id_usuario` int not null, `id_xerox` int not null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate utf8mb4_unicode_ci
CreateArquivosTable: alter table `arquivos` add constraint `arquivos_id_usuario_foreign` foreign key (`id_usuario`) references `users` (`id`)
CreateArquivosTable: alter table `arquivos` add constraint `arquivos_id_xerox_foreign` foreign key (`id_xerox`) references `xeroxes` (`id`)
