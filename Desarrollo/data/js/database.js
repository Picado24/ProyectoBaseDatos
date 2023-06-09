const sql = require('mssql');
async function insertarDiaHorario(nombreDia) {
    try {
      const pool = await sql.connect(); // Obtiene una conexión del pool
  
      const result = await pool.request()
        .input('horarioDiaNombre', sql.VarChar, nombreDia)
        .execute('sp_InsertarHorarioDia');
  
      console.log('Día de horario insertado correctamente.');
    } catch (error) {
      console.error('Error al insertar el día de horario:', error);
    }
  }
  
  module.exports = {
    insertarDiaHorario
  };
  