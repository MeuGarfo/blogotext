<?php
# *** LICENSE ***
# This file is part of BlogoText.
# http://lehollandaisvolant.net/blogotext/
#
# 2006      Frederic Nassar.
# 2010-2013 Timo Van Neerden.
#
# BlogoText is free software.
# You can redistribute it under the terms of the MIT / X11 Licence.
#

require_once dirname(getcwd()).'/inc/defines.php';
require_once BT_ROOT.'admin/inc/inc.php';

auth_ttl();
auth_kill_session();
