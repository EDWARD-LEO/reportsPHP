USE world;

-- Obtener todos los continentes
SELECT DISTINCT Continent FROM country;

DELIMITER $$
CREATE PROCEDURE spu_country_list_by_continent(IN _continent VARCHAR(30))
BEGIN
	SELECT	CNT.Code,
				CNT.Name,
				CNT.Region,
				CNT.SurfaceArea
		FROM country CNT
		WHERE CNT.Continent = _continent
		ORDER BY CNT.Name;
END $$

CALL spu_country_list_by_continent ('South America');