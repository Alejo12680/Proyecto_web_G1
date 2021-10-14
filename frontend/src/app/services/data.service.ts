import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders, HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class DataService {
  private API = 'http://127.0.0.1:8000/api';

  constructor(
    private http:HttpClient
  ) { }

  signup(data:Object):Observable<any>{
    return this.http.post(this.API+'/cliente/signup', data);
  }

  login(data:Object):Observable<any>{
    return this.http.post(this.API+'/cliente/login', data);
  }

}
