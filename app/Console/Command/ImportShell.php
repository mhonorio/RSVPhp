<?php
class ImportShell extends AppShell {
	
	public $uses = array('Guest');
	
    public function main() {

		if (($handle = fopen("./lista.csv", "r")) !== FALSE) {
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				$this->Guest->create();
				$this->Guest->set(array(
					'event_id' => 1,
					'first_name' => $data[0],
					'last_name' => $data[1],
					'hash' => md5(uniqid(rand(), true)),
					'companions' => $data[2]-1,
					'confirmed' => 0
				));
				$this->Guest->save();
				
			}
			fclose($handle);
		}
		

    }
}