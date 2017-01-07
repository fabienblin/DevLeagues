<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_48247a77edf91bf20f9b8d1a23943218568c1a1fed352527a7e8bd59121cc446 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_172ed347a2a8edf6cdbd8dcdccf0288a56a11369618169b0e0fa3346c38d7892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172ed347a2a8edf6cdbd8dcdccf0288a56a11369618169b0e0fa3346c38d7892->enter($__internal_172ed347a2a8edf6cdbd8dcdccf0288a56a11369618169b0e0fa3346c38d7892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_88f5b1730e259e7ef759f176bc5e21f3ec94a4cded8cfc6ab2b7ce828efd8b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f5b1730e259e7ef759f176bc5e21f3ec94a4cded8cfc6ab2b7ce828efd8b95->enter($__internal_88f5b1730e259e7ef759f176bc5e21f3ec94a4cded8cfc6ab2b7ce828efd8b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_172ed347a2a8edf6cdbd8dcdccf0288a56a11369618169b0e0fa3346c38d7892->leave($__internal_172ed347a2a8edf6cdbd8dcdccf0288a56a11369618169b0e0fa3346c38d7892_prof);

        
        $__internal_88f5b1730e259e7ef759f176bc5e21f3ec94a4cded8cfc6ab2b7ce828efd8b95->leave($__internal_88f5b1730e259e7ef759f176bc5e21f3ec94a4cded8cfc6ab2b7ce828efd8b95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
