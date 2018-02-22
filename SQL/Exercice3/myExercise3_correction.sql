UPDATE test.orders SET description='NC' WHERE agent_code = 'A002';
DELETE FROM test.orders WHERE customer_code = 'C00022' AND description = 'NC';