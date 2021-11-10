package consumirrest;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 *
 * @author faranzabe
 */
class Datos {

    private String DNI;
    private String Nombre;
    private String Tfno;
    private int edad;

    public Datos() {
    }

    public Datos(String DNI, String Nombre, String Tfno, int edad) {
        this.DNI = DNI;
        this.Nombre = Nombre;
        this.Tfno = Tfno;
        this.edad = edad;
    }

    public String getDNI() {
        return DNI;
    }

    public void setDNI(String DNI) {
        this.DNI = DNI;
    }

    public String getNombre() {
        return Nombre;
    }

    public void setNombre(String Nombre) {
        this.Nombre = Nombre;
    }

    public String getTfno() {
        return Tfno;
    }

    public void setTfno(String Tfno) {
        this.Tfno = Tfno;
    }

    public int getEdad() {
        return edad;
    }

    public void setEdad(int edad) {
        this.edad = edad;
    }

    @Override
    public String toString() {
        return "Datos{" + "DNI=" + DNI + ", Nombre=" + Nombre + ", Tfno=" + Tfno + ", edad=" + edad + '}';
    }

}
