export default class Gate{
  constructor(user){
    this.user = user;
  }

  isAdmin(){
    return this.user.type === 'admin';
  }

  isPlayer(){
    return this.user.type === 'player';
  }

  isAdminOrPlayer(){
    if(this.user.type === 'admin' || this.user.type === 'player'){
      return true;
    }
  }

}
