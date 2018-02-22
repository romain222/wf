ALTER TABLE town ADD CONSTRAINT Countryid FOREIGN KEY (Countryid) REFERENCES country(id);
ALTER TABLE address ADD CONSTRAINT addressToTown FOREIGN KEY(Townid) REFERENCES town(id);
ALTER TABLE person_address ADD CONSTRAINT paToPerson FOREIGN KEY(Personid) REFERENCES person(id);
ALTER TABLE person_address ADD CONSTRAINT poToAddress FOREIGN KEY(Addressid) REFERENCES address(id);
ALTER TABLE person_address ADD CONSTRAINT paToAddressType FOREIGN KEY(Address_typeid) REFERENCES address_type(id);