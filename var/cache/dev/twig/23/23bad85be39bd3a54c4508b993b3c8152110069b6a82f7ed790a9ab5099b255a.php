<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_2fad66698cd14b14bb013656dabc98e0c2dcfb533fdb332b29db02bc50b65eac extends Twig_Template
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
        $__internal_bf994f9cda07928aa99dfca0c414e42fe6710187327a9f040f157f73c39fea25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf994f9cda07928aa99dfca0c414e42fe6710187327a9f040f157f73c39fea25->enter($__internal_bf994f9cda07928aa99dfca0c414e42fe6710187327a9f040f157f73c39fea25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_7d106b64595e94ef810ecc0ec4a3f9708a5a1a5a1ce1217cdc9fbbafd0f52680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d106b64595e94ef810ecc0ec4a3f9708a5a1a5a1ce1217cdc9fbbafd0f52680->enter($__internal_7d106b64595e94ef810ecc0ec4a3f9708a5a1a5a1ce1217cdc9fbbafd0f52680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_bf994f9cda07928aa99dfca0c414e42fe6710187327a9f040f157f73c39fea25->leave($__internal_bf994f9cda07928aa99dfca0c414e42fe6710187327a9f040f157f73c39fea25_prof);

        
        $__internal_7d106b64595e94ef810ecc0ec4a3f9708a5a1a5a1ce1217cdc9fbbafd0f52680->leave($__internal_7d106b64595e94ef810ecc0ec4a3f9708a5a1a5a1ce1217cdc9fbbafd0f52680_prof);

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
