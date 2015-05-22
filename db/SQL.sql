select distinct * from rekammedis  join pasien on pasien.IDPASIEN=rekammedis.IDPASIEN join rm_treatment on rm_treatment.IDREKAM=rekammedis.IDREKAM join treatment on treatment.IDTREATMENT=rm_treatment.IDTREATMENT
join rm_obat on rm_obat.IDREKAM=rekammedis.IDREKAM join obat on rm_obat.IDOBAT=obat.IDOBAT
where pasien.IDPASIEN=1 and rekammedis.TANGGALREKAM="2015-05-23";

SELECT DISTINCT rm_obat.IDREKAM, rm_obat.IDOBAT, obat.NAMAOBAT, rm_treatment.IDTREATMENT, treatment.NAMATREATMENT
FROM rm_obat, rekammedis, obat, rm_treatment, treatment WHERE rekammedis.IDPASIEN = 1 AND rm_obat.IDOBAT=obat.IDOBAT AND rm_treatment.IDTREATMENT = treatment.IDTREATMENT
INNER JOIN 

select distinct * from rekammedis  join pasien on pasien.IDPASIEN=rekammedis.IDPASIEN
