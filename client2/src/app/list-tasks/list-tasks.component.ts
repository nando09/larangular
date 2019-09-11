import { Component, OnInit } from '@angular/core';

@Component({
	selector: 'app-list-tasks',
	templateUrl: './list-tasks.component.html',
	styleUrls: ['./list-tasks.component.css']
})
export class ListTasksComponent implements OnInit {

	private tasks = [
		{"nome" : 'Fernando', "id" : 1},
		{"nome" : 'Jaqueline', "id" : 2},
		{"nome" : 'Lindinalva', "id" : 3},
		{"nome" : 'Melzinha', "id" : 4},
		{"nome" : 'Nilson', "id" : 5},
		{"nome" : 'Fabiana', "id" : 6}
	];

	constructor() { }

	ngOnInit() {
	}

}
