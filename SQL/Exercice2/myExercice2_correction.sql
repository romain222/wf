SELECT DISTINCT agent_code FROM test.orders WHERE amount > 999;
SELECT agent_code, SUM(amount) FROM test.orders WHERE amount > 999 GROUP BY agent_code;
SELECT agent_code, SUM(amount), COUNT(id) FROM test.orders WHERE amount > 999 GROUP BY agent_code;
SELECT agent_code, SUM(amount), COUNT(id) FROM test.orders WHERE amount > 999 GROUP BY agent_code ORDER BY AVG(amount) DESC;

SELECT agent_code FROM test.orders WHERE agent_code IN (SELECT DISTINCT agent_code FROM test.orders WHERE amount > 999);

SELECT agent_code,SUM(amount),count(id) FROM test.orders WHERE agent_code IN (SELECT DISTINCT agent_code FROM test.orders WHERE amount > 999) GROUP BY agent_code ORDER BY AVG(amount) DESC;