alter table ongs.ongs modify created_at timestamp not null;
alter table ongs.ongs modify updated_at timestamp not null;
insert into ongs.ongs (cif,nom,adreça,poblacio,comarca,tipusOng,utilitatPublica) values ("34586264F",
"Unicef","Carrer Valéncia, 72","Barcelona","Barcelona","Ajuda al tercer món","Si");
insert into ongs.ongs (cif,nom,adreça,poblacio,comarca,tipusOng,utilitatPublica) values ("98534672P",
"Mans Unides","Gran via, 68","Madrid","Madrid","Ajuda al tercer món","Si");
insert into ongs.ongs (cif,nom,adreça,poblacio,comarca,tipusOng,utilitatPublica) values ("18365867L",
"Metges Sense Fronteres","Carrer Pilar, 72","Premià de Mar","Maresme","Sanitat al tercer món","No");
insert into ongs.ongs (cif,nom,adreça,poblacio,comarca,tipusOng,utilitatPublica) values ("64834671M",
"Caritas","Carrer Santamaria, 32","Barcelona","Barcelona","Ajuda als desfavorits","Si");


