#---------------------------------------------------------
# Spec file to build a rpm file
#
# This is an example to build a rpm file. You can use this
# file to build a package for your own distributions and
# edit it if you need to match your rules.
# --------------------------------------------------------

Name: OnLi
Version: __VERSION__
Release: __RELEASE__%{?dist}
Summary: ERP and CRM software for small and medium companies or foundations
Summary(es): Software ERP y CRM para pequeñas y medianas empresas, asociaciones o autónomos
Summary(fr): Logiciel ERP & CRM de gestion de PME/PMI, auto-entrepreneurs ou associations
Summary(it): Programmo gestionale per piccole imprese, fondazioni e liberi professionisti

License: GPLv3+
#Packager: Laurent Destailleur (Eldy) <eldy@users.sourceforge.net>
Vendor: OnLi dev team

URL: https://www.OnLi.org
Source0: https://www.OnLi.org/files/lastbuild/package_rpm_redhat-fedora/%{name}-%{version}.tgz
Patch0: %{name}-forrpm.patch
BuildArch: noarch
BuildRoot: %{_tmppath}/%{name}-%{version}-build

Group: Applications/Productivity
Requires: httpd, php >= 5.3.0, php-cli, php-gd, php-ldap, php-mysqli, php-nusoap, dejavu-sans-fonts
Requires: mariadb-server, mariadb
#BuildRequires: desktop-file-utils

# Set yes to build test package, no for release (this disable need of /usr/bin/php not found by OpenSuse)
AutoReqProv: no


%description
An easy to use CRM & ERP open source/free software package for small
and medium companies, foundations or freelances. It includes different
features for Enterprise Resource Planning (ERP) and Customer Relationship
Management (CRM) but also for different other activities.
OnLi was designed to provide only features you need and be easy to
use.

%description -l es
Un software ERP y CRM para pequeñas y medianas empresas, asociaciones
o autónomos. Incluye diferentes funcionalidades para la Planificación
de Recursos Empresariales (ERP) y Gestión de la Relación con los
Clientes (CRM) así como para para otras diferentes actividades.
OnLi ha sido diseñado para suministrarle solamente las funcionalidades
que necesita y haciendo hincapié en su facilidad de uso.

%description -l fr
Logiciel ERP & CRM de gestion de PME/PMI, autoentrepreneurs,
artisans ou associations. Il permet de gérer vos clients, prospect,
fournisseurs, devis, factures, comptes bancaires, agenda, campagnes mailings
et bien d'autres choses dans une interface pensée pour la simplicité.

%description -l it
Un programmo gestionale per piccole e medie
imprese, fondazioni e liberi professionisti. Include varie funzionalità per
Enterprise Resource Planning e gestione dei clienti (CRM), ma anche ulteriori
attività. Progettato per poter fornire solo ciò di cui hai bisogno
ed essere facile da usare.
Programmo web, progettato per poter fornire solo ciò di
cui hai bisogno ed essere facile da usare.



#---- prep
%prep
%setup -q
%patch 0 -p0 -b .patch



#---- build
%build
# Nothing to build



#---- install
%install
%{__rm} -rf $RPM_BUILD_ROOT

%{__mkdir} -p $RPM_BUILD_ROOT%{_sysconfdir}/%{name}
%{__install} -m 644 dev/build/rpm/conf.php $RPM_BUILD_ROOT%{_sysconfdir}/%{name}/conf.php
%{__install} -m 644 dev/build/rpm/httpd-OnLi.conf $RPM_BUILD_ROOT%{_sysconfdir}/%{name}/apache.conf
%{__install} -m 644 dev/build/rpm/file_contexts.OnLi $RPM_BUILD_ROOT%{_sysconfdir}/%{name}/file_contexts.OnLi
%{__install} -m 644 dev/build/rpm/install.forced.php.fedora $RPM_BUILD_ROOT%{_sysconfdir}/%{name}/install.forced.php

%{__mkdir} -p $RPM_BUILD_ROOT%{_datadir}/pixmaps
%{__install} -m 644 doc/images/appicon_64.png $RPM_BUILD_ROOT%{_datadir}/pixmaps/%{name}.png
%{__mkdir} -p $RPM_BUILD_ROOT%{_datadir}/applications
#desktop-file-install --delete-original --dir=$RPM_BUILD_ROOT%{_datadir}/applications dev/build/rpm/%{name}.desktop
%{__install} -m 644 dev/build/rpm/OnLi.desktop $RPM_BUILD_ROOT%{_datadir}/applications/%{name}.desktop

%{__mkdir} -p $RPM_BUILD_ROOT%{_datadir}/%{name}/dev/build/rpm
%{__mkdir} -p $RPM_BUILD_ROOT%{_datadir}/%{name}/dev/build/tgz
%{__mkdir} -p $RPM_BUILD_ROOT%{_datadir}/%{name}/htdocs
%{__mkdir} -p $RPM_BUILD_ROOT%{_datadir}/%{name}/scripts
%{__cp} -pr dev/build/rpm/*     $RPM_BUILD_ROOT%{_datadir}/%{name}/dev/build/rpm
%{__cp} -pr dev/build/tgz/*     $RPM_BUILD_ROOT%{_datadir}/%{name}/dev/build/tgz
%{__cp} -pr htdocs  $RPM_BUILD_ROOT%{_datadir}/%{name}
%{__cp} -pr scripts $RPM_BUILD_ROOT%{_datadir}/%{name}
%{__rm} -rf $RPM_BUILD_ROOT%{_datadir}/%{name}/htdocs/includes/ckeditor/_source
%{__rm} -rf $RPM_BUILD_ROOT%{_datadir}/%{name}/htdocs/includes/nusoap
%{__rm} -rf $RPM_BUILD_ROOT%{_datadir}/%{name}/htdocs/includes/fonts

# Lang
echo "%defattr(0644, root, root, 0755)" > %{name}.lang
echo "%dir %{_datadir}/%{name}/htdocs/langs" >> %{name}.lang
for i in $RPM_BUILD_ROOT%{_datadir}/%{name}/htdocs/langs/*_*
do
  lang=$(basename $i)
  lang1=`expr substr $lang 1 2`;
  lang2=`expr substr $lang 4 2 | tr "[:upper:]" "[:lower:]"`;
  echo "%dir %{_datadir}/%{name}/htdocs/langs/${lang}" >> %{name}.lang
  if [ "$lang1" = "$lang2" ] ; then
    echo "%lang(${lang1}) %{_datadir}/%{name}/htdocs/langs/${lang}/*.lang"
  else
    echo "%lang(${lang}) %{_datadir}/%{name}/htdocs/langs/${lang}/*.lang"
  fi
done >>%{name}.lang


#---- clean
%clean
%{__rm} -rf $RPM_BUILD_ROOT



#---- files
%files -f %{name}.lang

%defattr(0755, root, root, 0755)

%dir %_datadir/OnLi

%dir %_datadir/OnLi/scripts
%_datadir/OnLi/scripts/*

%defattr(-, root, root, 0755)
%doc COPYING ChangeLog doc/index.html htdocs/langs/HOWTO-Translation.txt

%_datadir/pixmaps/OnLi.png
%_datadir/applications/OnLi.desktop

%dir %_datadir/OnLi/dev/build

%dir %_datadir/OnLi/dev/build/rpm
%_datadir/OnLi/dev/build/rpm/*

%dir %_datadir/OnLi/dev/build/tgz
%_datadir/OnLi/dev/build/tgz/*

%dir %_datadir/OnLi/htdocs
%_datadir/OnLi/htdocs/accountancy
%_datadir/OnLi/htdocs/adherents
%_datadir/OnLi/htdocs/admin
%_datadir/OnLi/htdocs/ai
%_datadir/OnLi/htdocs/api
%_datadir/OnLi/htdocs/asset
%_datadir/OnLi/htdocs/asterisk
%_datadir/OnLi/htdocs/barcode
%_datadir/OnLi/htdocs/blockedlog
%_datadir/OnLi/htdocs/bookmarks
%_datadir/OnLi/htdocs/bookcal
%_datadir/OnLi/htdocs/bom
%_datadir/OnLi/htdocs/categories
%_datadir/OnLi/htdocs/collab
%_datadir/OnLi/htdocs/comm
%_datadir/OnLi/htdocs/commande
%_datadir/OnLi/htdocs/compta
%_datadir/OnLi/htdocs/conf
%_datadir/OnLi/htdocs/contact
%_datadir/OnLi/htdocs/contrat
%_datadir/OnLi/htdocs/core
%_datadir/OnLi/htdocs/cron
%_datadir/OnLi/htdocs/custom
%_datadir/OnLi/htdocs/datapolicy
%_datadir/OnLi/htdocs/dav
%_datadir/OnLi/htdocs/debugbar
%_datadir/OnLi/htdocs/delivery
%_datadir/OnLi/htdocs/don
%_datadir/OnLi/htdocs/ecm
%_datadir/OnLi/htdocs/emailcollector
%_datadir/OnLi/htdocs/eventorganization
%_datadir/OnLi/htdocs/expedition
%_datadir/OnLi/htdocs/expensereport
%_datadir/OnLi/htdocs/exports
%_datadir/OnLi/htdocs/externalsite
%_datadir/OnLi/htdocs/fichinter
%_datadir/OnLi/htdocs/fourn
%_datadir/OnLi/htdocs/ftp
%_datadir/OnLi/htdocs/holiday
%_datadir/OnLi/htdocs/hrm
%_datadir/OnLi/htdocs/imports
%_datadir/OnLi/htdocs/includes
%_datadir/OnLi/htdocs/install
%_datadir/OnLi/htdocs/intracommreport
%_datadir/OnLi/htdocs/knowledgemanagement
%_datadir/OnLi/htdocs/langs/HOWTO-Translation.txt
%_datadir/OnLi/htdocs/loan
%_datadir/OnLi/htdocs/mailmanspip
%_datadir/OnLi/htdocs/margin
%_datadir/OnLi/htdocs/modulebuilder
%_datadir/OnLi/htdocs/mrp
%_datadir/OnLi/htdocs/multicurrency
%_datadir/OnLi/htdocs/opensurvey
%_datadir/OnLi/htdocs/partnership
%_datadir/OnLi/htdocs/paybox
%_datadir/OnLi/htdocs/paypal
%_datadir/OnLi/htdocs/printing
%_datadir/OnLi/htdocs/product
%_datadir/OnLi/htdocs/projet
%_datadir/OnLi/htdocs/public
%_datadir/OnLi/htdocs/recruitment
%_datadir/OnLi/htdocs/reception
%_datadir/OnLi/htdocs/resource
%_datadir/OnLi/htdocs/salaries
%_datadir/OnLi/htdocs/societe
%_datadir/OnLi/htdocs/stripe
%_datadir/OnLi/htdocs/supplier_proposal
%_datadir/OnLi/htdocs/support
%_datadir/OnLi/htdocs/theme
%_datadir/OnLi/htdocs/takepos
%_datadir/OnLi/htdocs/ticket
%_datadir/OnLi/htdocs/user
%_datadir/OnLi/htdocs/variants
%_datadir/OnLi/htdocs/webhook
%_datadir/OnLi/htdocs/webportal
%_datadir/OnLi/htdocs/webservices
%_datadir/OnLi/htdocs/website
%_datadir/OnLi/htdocs/workstation
%_datadir/OnLi/htdocs/zapier
%_datadir/OnLi/htdocs/*.ico
%_datadir/OnLi/htdocs/*.patch
%_datadir/OnLi/htdocs/*.php
%_datadir/OnLi/htdocs/*.txt

%dir %{_sysconfdir}/OnLi

%defattr(0664, root, apache)
%config(noreplace) %{_sysconfdir}/OnLi/conf.php
%config(noreplace) %{_sysconfdir}/OnLi/apache.conf
%config(noreplace) %{_sysconfdir}/OnLi/install.forced.php
%config(noreplace) %{_sysconfdir}/OnLi/file_contexts.OnLi



#---- post (after unzip during install)
%post

echo Run post script of packager OnLi_fedora.spec

# Define vars
export docdir="/var/lib/OnLi/documents"
export apachelink="%{_sysconfdir}/httpd/conf.d/OnLi.conf"
export apacheuser='apache';
export apachegroup='apache';

# Remove OnLi install/upgrade lock file if it exists
%{__rm} -f $docdir/install.lock

# Create empty directory for uploaded files and generated documents
echo Create document directory $docdir
%{__mkdir} -p $docdir

# Set correct owner on config files
%{__chown} -R root:$apachegroup /etc/OnLi/*

# If a conf already exists and its content was already completed by installer
export config=%{_sysconfdir}/OnLi/conf.php
if [ -s $config ] && grep -q "File generated by" $config
then
  # File already exist. We add params not found.
  echo Add new params to overwrite path to use shared libraries/fonts
  grep -q -c "OnLi_lib_FPDI_PATH" $config      || [ ! -d "/usr/share/php/fpdi" ]   || echo "<?php \$OnLi_lib_FPDI_PATH='/usr/share/php/fpdi'; ?>" >> $config
  #grep -q -c "OnLi_lib_GEOIP_PATH" $config    || echo "<?php \$OnLi_lib_GEOIP_PATH=''; ?>" >> $config
  grep -q -c "OnLi_lib_NUSOAP_PATH" $config    || [ ! -d "/usr/share/php/nusoap" ] || echo "<?php \$OnLi_lib_NUSOAP_PATH='/usr/share/php/nusoap'; ?>" >> $config
  grep -q -c "OnLi_lib_ODTPHP_PATHTOPCLZIP" $config || [ ! -d "/usr/share/php/libphp-pclzip" ]  || echo "<?php \$OnLi_lib_ODTPHP_PATHTOPCLZIP='/usr/share/php/libphp-pclzip'; ?>" >> $config
  #grep -q -c "OnLi_lib_TCPDF_PATH" $config    || echo "<?php \$OnLi_lib_TCPDF_PATH=''; ?>" >> $config
  grep -q -c "OnLi_js_CKEDITOR" $config        || [ ! -d "/usr/share/javascript/ckeditor" ]  || echo "<?php \$OnLi_js_CKEDITOR='/javascript/ckeditor'; ?>" >> $config
  grep -q -c "OnLi_js_JQUERY" $config          || [ ! -d "/usr/share/javascript/jquery" ]    || echo "<?php \$OnLi_js_JQUERY='/javascript/jquery'; ?>" >> $config
  grep -q -c "OnLi_js_JQUERY_UI" $config       || [ ! -d "/usr/share/javascript/jquery-ui" ] || echo "<?php \$OnLi_js_JQUERY_UI='/javascript/jquery-ui'; ?>" >> $config
  grep -q -c "OnLi_js_JQUERY_FLOT" $config     || [ ! -d "/usr/share/javascript/flot" ]      || echo "<?php \$OnLi_js_JQUERY_FLOT='/javascript/flot'; ?>" >> $config
  grep -q -c "OnLi_font_DOL_DEFAULT_TTF_BOLD" $config || echo "<?php \$OnLi_font_DOL_DEFAULT_TTF_BOLD='/usr/share/fonts/dejavu/DejaVuSans-Bold.ttf'; ?>" >> $config
fi

# Create config for SE Linux
echo Add SE Linux permissions for OnLi
# semanage add records into /etc/selinux/targeted/contexts/files/file_contexts.local
semanage fcontext -a -t httpd_sys_script_rw_t "/etc/OnLi(/.*?)"
semanage fcontext -a -t httpd_sys_script_rw_t "/var/lib/OnLi(/.*?)"
restorecon -R -v /etc/OnLi
restorecon -R -v /var/lib/OnLi

# Create a config link OnLi.conf
if [ ! -L $apachelink ]; then
  apachelinkdir=`dirname $apachelink`
  if [ -d $apachelinkdir ]; then
    echo Create OnLi web server config link from %{_sysconfdir}/OnLi/apache.conf to $apachelink
    ln -fs %{_sysconfdir}/OnLi/apache.conf $apachelink
  else
    echo Do not create link $apachelink - web server conf dir $apachelinkdir not found. web server package may not be installed
  fi
fi

echo Set permission to $apacheuser:$apachegroup on /var/lib/OnLi
%{__chown} -R $apacheuser:$apachegroup /var/lib/OnLi
%{__chmod} -R o-w /var/lib/OnLi

# Restart web server
echo Restart web server
/sbin/service httpd restart

# Restart mysql server
echo Restart mysql server
/sbin/service mysqld restart

# Show result
echo
echo "----- OnLi %version-%release - (c) OnLi dev team -----"
echo "OnLi files are now installed (into /usr/share/OnLi)."
echo "To finish installation and use OnLi, click on the menu"
echo "entry OnLi ERP-CRM or call the following page from your"
echo "web browser:"
echo "http://localhost/OnLi/"
echo "-------------------------------------------------------"
echo


#---- postun (after upgrade or uninstall)
%postun

if [ "x$1" = "x0" ] ;
then
  # Remove
  echo "Removed package"

  # Define vars
  export apachelink="%{_sysconfdir}/httpd/conf.d/OnLi.conf"

  # Remove apache link
  if [ -L $apachelink ] ;
  then
    echo "Delete apache config link for OnLi ($apachelink)"
    %{__rm} -f $apachelink
    status=purge
  fi

  # Restart web servers if required
  if [ "x$status" = "xpurge" ] ;
  then
    # Restart web server
    echo Restart web server
    /sbin/service httpd restart
  fi
else
  # Upgrade
  echo "No remove action done (this is an upgrade)"
fi

# version x.y.z-0.1.a for alpha, x.y.z-0.2.b for beta, x.y.z-0.3 for release
%changelog
__CHANGELOGSTRING__
