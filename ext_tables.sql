#
# Table structure for table 'tx_ifabrealestate_domain_model_property'
#
CREATE TABLE tx_ifabrealestate_domain_model_property (

	floor varchar(255) DEFAULT '' NOT NULL,
	total_floors varchar(255) DEFAULT '' NOT NULL,
	apartment_number varchar(255) DEFAULT '' NOT NULL,
	extra_property_nature varchar(255) DEFAULT '' NOT NULL,
	purchase float,
	purchase_price_net float,
	purchase_price_gross float,
	net_cold_rent float,
	cold_rent float,
	rent_with_heat float,
	additional_costs float,
	heating_costs float,
	flat_rate_rent float,
	rent_price_per_qm float,
	purchase_price_per_qm float,
	guarantee_price float,
	guarantee_price_text varchar(255) DEFAULT '' NOT NULL,
	living_space float,
	usable_area float,
	total_size float,
	load_area float,
	storage_area float,
	sales_area float,
	free_area float,
	office_area float,
	office_part_area float,
	number_of_rooms float,
	number_of_bedrooms int(11) DEFAULT '0',
	number_of_bathrooms int(11) DEFAULT '0',
	number_of_balconies int(11) DEFAULT '0',
	number_of_terraces int(11) DEFAULT '0',
	number_of_logia int(11) DEFAULT '0',
	wg_suitable smallint(5) unsigned DEFAULT '0' NOT NULL,
	fireplace smallint(5) unsigned DEFAULT '0' NOT NULL,
	clima smallint(5) unsigned DEFAULT '0' NOT NULL,
	construction_year varchar(255) DEFAULT '' NOT NULL,
	construction_age varchar(255) DEFAULT '' NOT NULL,
	epart varchar(255) DEFAULT '' NOT NULL,
	expiration_date varchar(255) DEFAULT '' NOT NULL,
	energy_consum_value varchar(255) DEFAULT '' NOT NULL,
	primary_energy_source varchar(255) DEFAULT '' NOT NULL,
	electricity_value varchar(255) DEFAULT '' NOT NULL,
	heat_value varchar(255) DEFAULT '' NOT NULL,
	value_class varchar(255) DEFAULT '' NOT NULL,
	creation_date varchar(255) DEFAULT '' NOT NULL,
	creation_year varchar(255) DEFAULT '' NOT NULL,
	building varchar(255) DEFAULT '' NOT NULL,
	property_title varchar(255) DEFAULT '' NOT NULL,
	property_location text,
	property_equipment text,
	property_description text,
	addition_information text,
	property_text text,
	available_from varchar(255) DEFAULT '' NOT NULL,
	property_release smallint(5) unsigned DEFAULT '0' NOT NULL,
	pets smallint(5) unsigned DEFAULT '0' NOT NULL,
	internal_property_number varchar(255) DEFAULT '' NOT NULL,
	external_property_number varchar(255) DEFAULT '' NOT NULL,
	open_immo_id varchar(255) DEFAULT '' NOT NULL,
	property_usage_rel int(11) unsigned DEFAULT '0' NOT NULL,
	marketing_method_rel int(11) unsigned DEFAULT '0' NOT NULL,
	property_nature_rel int(11) unsigned DEFAULT '0',
	property_type_value_rel int(11) unsigned DEFAULT '0' NOT NULL,
	address_rel int(11) unsigned DEFAULT '0',
	contact_rel int(11) unsigned DEFAULT '0' NOT NULL,
	bathroom_rel int(11) unsigned DEFAULT '0' NOT NULL,
	kitchen_rel int(11) unsigned DEFAULT '0' NOT NULL,
	floor_rel int(11) unsigned DEFAULT '0' NOT NULL,
	heat_rel int(11) unsigned DEFAULT '0' NOT NULL,
	elevator_rel int(11) unsigned DEFAULT '0' NOT NULL,
	parking_rel int(11) unsigned DEFAULT '0' NOT NULL,
	firing_rel int(11) unsigned DEFAULT '0' NOT NULL,
	attachments_rel int(11) unsigned DEFAULT '0' NOT NULL,
	path_segment varchar(255) DEFAULT '' NOT NULL,
	property_action_rel int(11) unsigned DEFAULT '0' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_ifabrealestate_domain_model_attachmentgroupvaluerel'
#
CREATE TABLE tx_ifabrealestate_domain_model_attachmentgroupvaluerel (
	name varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,
);


#
# Table structure for table 'tx_ifabrealestate_domain_model_propertyusage'
#
CREATE TABLE tx_ifabrealestate_domain_model_propertyusage (
	name varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_ifabrealestate_domain_model_marketingmethod'
#
CREATE TABLE tx_ifabrealestate_domain_model_marketingmethod (
	name varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_ifabrealestate_domain_model_propertynature'
#
CREATE TABLE tx_ifabrealestate_domain_model_propertynature (
	name varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_ifabrealestate_domain_model_propertytypevalue'
#
CREATE TABLE tx_ifabrealestate_domain_model_propertytypevalue (

	property int(11) unsigned DEFAULT '0' NOT NULL,

	propertytypevaluerel int(11) unsigned DEFAULT '0',
	objektarttype_relation int(11) unsigned DEFAULT '0',
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,

);

CREATE TABLE tx_ifabrealestate_domain_model_propertytypevaluerel(
    name varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_ifabrealestate_domain_model_propertytype'
#
CREATE TABLE tx_ifabrealestate_domain_model_propertytype (
	name varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_ifabrealestate_domain_model_propertyaction'
#
CREATE TABLE tx_ifabrealestate_domain_model_propertyaction (

	property int(11) unsigned DEFAULT '0' NOT NULL,

	propertyactionattributevalue_relation int(11) unsigned DEFAULT '0',
	propertyactionattribute_relation int(11) unsigned DEFAULT '0',
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,

);


#
# Table structure for table 'tx_ifabrealestate_domain_model_propertyactionattribute'
#
CREATE TABLE tx_ifabrealestate_domain_model_propertyactionattribute (
	name varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_ifabrealestate_domain_model_propertyactionvalue'
#
CREATE TABLE tx_ifabrealestate_domain_model_propertyactionvalue (
	name varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_ifabrealestate_domain_model_address'
#
CREATE TABLE tx_ifabrealestate_domain_model_address (

	street varchar(255) DEFAULT '' NOT NULL,
	address_number varchar(255) DEFAULT '' NOT NULL,
	area varchar(255) DEFAULT '' NOT NULL,
	zip varchar(255) DEFAULT '' NOT NULL,
	state varchar(255) DEFAULT '' NOT NULL,
	country varchar(255) DEFAULT '' NOT NULL,
	municipality_code varchar(255) DEFAULT '' NOT NULL,
	subdistrict varchar(255) DEFAULT '' NOT NULL,
	regional_addition varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_ifabrealestate_domain_model_contact'
#
CREATE TABLE tx_ifabrealestate_domain_model_contact (

	employee_number varchar(255) DEFAULT '' NOT NULL,
	name varchar(255) DEFAULT '' NOT NULL,
	surname varchar(255) DEFAULT '' NOT NULL,
	title varchar(255) DEFAULT '' NOT NULL,
	central_email varchar(255) DEFAULT '' NOT NULL,
	direct_email varchar(255) DEFAULT '' NOT NULL,
	private_email varchar(255) DEFAULT '' NOT NULL,
	central_tel varchar(255) DEFAULT '' NOT NULL,
	direct_tel varchar(255) DEFAULT '' NOT NULL,
	private_tel varchar(255) DEFAULT '' NOT NULL,
	fax varchar(255) DEFAULT '' NOT NULL,
	mobile_phone varchar(255) DEFAULT '' NOT NULL,
	hide_address smallint(5) unsigned DEFAULT '0' NOT NULL,
	po_box varchar(255) DEFAULT '' NOT NULL,
	po_zip varchar(255) DEFAULT '' NOT NULL,
	po_area varchar(255) DEFAULT '' NOT NULL,
	image int(11) unsigned NOT NULL default '0',
	contact_address_rel int(11) unsigned DEFAULT '0',
	gender_rel int(11) unsigned DEFAULT '0',
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_ifabrealestate_domain_model_contactaddress'
#
CREATE TABLE tx_ifabrealestate_domain_model_contactaddress (

	street varchar(255) DEFAULT '' NOT NULL,
	address_number varchar(255) DEFAULT '' NOT NULL,
	area varchar(255) DEFAULT '' NOT NULL,
	zip varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_ifabrealestate_domain_model_bathroomtype'
#
CREATE TABLE tx_ifabrealestate_domain_model_bathroomtype (

	name varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_ifabrealestate_domain_model_kitchentype'
#
CREATE TABLE tx_ifabrealestate_domain_model_kitchentype (

	name varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_ifabrealestate_domain_model_floortype'
#
CREATE TABLE tx_ifabrealestate_domain_model_floortype (

	name varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_ifabrealestate_domain_model_heattype'
#
CREATE TABLE tx_ifabrealestate_domain_model_heattype (

	name varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_ifabrealestate_domain_model_elevatortype'
#
CREATE TABLE tx_ifabrealestate_domain_model_elevatortype (

	name varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_ifabrealestate_domain_model_parking'
#
CREATE TABLE tx_ifabrealestate_domain_model_parking (

	name varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_ifabrealestate_domain_model_firingtype'
#
CREATE TABLE tx_ifabrealestate_domain_model_firingtype (

	name varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_ifabrealestate_domain_model_attachments'
#
CREATE TABLE tx_ifabrealestate_domain_model_attachments (

	property int(11) unsigned DEFAULT '0' NOT NULL,

    attachment_title varchar(255) DEFAULT '' NOT NULL,
    attachment_format varchar(255) DEFAULT '' NOT NULL,
    attachment_name varchar(255) DEFAULT '' NOT NULL,
    property_id int(11) DEFAULT '0' NOT NULL,
	file int(11) unsigned NOT NULL default '0',
	attachment_group_value_rel int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,
	sorting_property int(11) DEFAULT '0' NOT NULL,
	is_sharing_image smallint(5) unsigned DEFAULT '0' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_ifabrealestate_domain_model_attachmentgroup'
#
CREATE TABLE tx_ifabrealestate_domain_model_attachmentgroup (

	name varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_ifabrealestate_domain_model_attachmentgroupvalue'
#
CREATE TABLE tx_ifabrealestate_domain_model_attachmentgroupvalue (

	attachments int(11) unsigned DEFAULT '0' NOT NULL,

	value_rel int(11) unsigned DEFAULT '0',
	attachment_group_rel int(11) unsigned DEFAULT '0',
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_ifabrealestate_domain_model_gender'
#
CREATE TABLE tx_ifabrealestate_domain_model_gender (

	name varchar(255) DEFAULT '' NOT NULL,
	import_status smallint(5) unsigned DEFAULT '0' NOT NULL,
	is_imported smallint(5) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_ifabrealestate_domain_model_propertytypevalue'
#
CREATE TABLE tx_ifabrealestate_domain_model_propertytypevalue (

	property int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_ifabrealestate_domain_model_attachments'
#
CREATE TABLE tx_ifabrealestate_domain_model_attachments (

	property int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_ifabrealestate_property_propertyusage_mm'
#
CREATE TABLE tx_ifabrealestate_property_propertyusage_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_ifabrealestate_property_marketingmethod_mm'
#
CREATE TABLE tx_ifabrealestate_property_marketingmethod_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_ifabrealestate_property_contact_mm'
#
CREATE TABLE tx_ifabrealestate_property_contact_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_ifabrealestate_property_bathroomtype_mm'
#
CREATE TABLE tx_ifabrealestate_property_bathroomtype_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_ifabrealestate_property_kitchentype_mm'
#
CREATE TABLE tx_ifabrealestate_property_kitchentype_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_ifabrealestate_property_floortype_mm'
#
CREATE TABLE tx_ifabrealestate_property_floortype_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_ifabrealestate_property_heattype_mm'
#
CREATE TABLE tx_ifabrealestate_property_heattype_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_ifabrealestate_property_elevatortype_mm'
#
CREATE TABLE tx_ifabrealestate_property_elevatortype_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_ifabrealestate_property_parking_mm'
#
CREATE TABLE tx_ifabrealestate_property_parking_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_ifabrealestate_property_firingtype_mm'
#
CREATE TABLE tx_ifabrealestate_property_firingtype_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);