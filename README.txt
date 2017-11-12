SELECT subject, predicate, COUNT(*)
FROM tx_vocabulary_domain_model_statements
WHERE predicate = 1 AND pid = 90
GROUP BY subject, predicate
HAVING COUNT(*) > 1

---

SELECT '3' AS uid_local, uid AS uid_foreign, @rownum := @rownum + 1 AS sorting
FROM tx_vocabulary_domain_model_terms
CROSS JOIN (SELECT @rownum := 0) r
WHERE pid = 90
ORDER BY title;
