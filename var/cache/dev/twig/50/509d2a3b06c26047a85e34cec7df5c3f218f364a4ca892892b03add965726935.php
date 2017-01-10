<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6cc4705e28430af6a7fe98a759dd5b8784785d6c84f2cfa9777402b3e40c8981 extends Twig_Template
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
        $__internal_6390ca34e75a3a8c0a47e925b5b9fcb3524a3f5bb4482b3f33bf9c21d2107c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6390ca34e75a3a8c0a47e925b5b9fcb3524a3f5bb4482b3f33bf9c21d2107c4d->enter($__internal_6390ca34e75a3a8c0a47e925b5b9fcb3524a3f5bb4482b3f33bf9c21d2107c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_6154a8f52887890f41aa5d2422ad27593c01238cc3b52fcb525a8992ebb9aac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6154a8f52887890f41aa5d2422ad27593c01238cc3b52fcb525a8992ebb9aac2->enter($__internal_6154a8f52887890f41aa5d2422ad27593c01238cc3b52fcb525a8992ebb9aac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6390ca34e75a3a8c0a47e925b5b9fcb3524a3f5bb4482b3f33bf9c21d2107c4d->leave($__internal_6390ca34e75a3a8c0a47e925b5b9fcb3524a3f5bb4482b3f33bf9c21d2107c4d_prof);

        
        $__internal_6154a8f52887890f41aa5d2422ad27593c01238cc3b52fcb525a8992ebb9aac2->leave($__internal_6154a8f52887890f41aa5d2422ad27593c01238cc3b52fcb525a8992ebb9aac2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
