<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_50fdf78189b64e58b5dd37930c37fc82e5e736701812fd79c9f9d23e27cd08d5 extends Twig_Template
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
        $__internal_48873a88e6fc90accce88b1d385f0bcbffdcb4310bd3aeab7a1300b6b3b76e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48873a88e6fc90accce88b1d385f0bcbffdcb4310bd3aeab7a1300b6b3b76e2a->enter($__internal_48873a88e6fc90accce88b1d385f0bcbffdcb4310bd3aeab7a1300b6b3b76e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_2b9b162cf5417249949f41caf0557210d5a6ee3e162d638ce4ba7d7488e9a1c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9b162cf5417249949f41caf0557210d5a6ee3e162d638ce4ba7d7488e9a1c5->enter($__internal_2b9b162cf5417249949f41caf0557210d5a6ee3e162d638ce4ba7d7488e9a1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_48873a88e6fc90accce88b1d385f0bcbffdcb4310bd3aeab7a1300b6b3b76e2a->leave($__internal_48873a88e6fc90accce88b1d385f0bcbffdcb4310bd3aeab7a1300b6b3b76e2a_prof);

        
        $__internal_2b9b162cf5417249949f41caf0557210d5a6ee3e162d638ce4ba7d7488e9a1c5->leave($__internal_2b9b162cf5417249949f41caf0557210d5a6ee3e162d638ce4ba7d7488e9a1c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
