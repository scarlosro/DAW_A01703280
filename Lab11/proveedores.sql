BULK INSERT a1703280.a1703280.[Proveedores]
   FROM 'e:\wwwroot\rcortese\proveedoress.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )
