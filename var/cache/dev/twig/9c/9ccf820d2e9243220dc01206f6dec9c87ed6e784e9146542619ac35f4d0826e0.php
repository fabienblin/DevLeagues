<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c7de40c3c7ff2d25c6419e1d81afb4c95b8751fe9ef0d77355a7525655b9b30c extends Twig_Template
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
        $__internal_00c508126db323992c0bda0f9ad5e00c3b956317436f3015e4a78524578f42ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00c508126db323992c0bda0f9ad5e00c3b956317436f3015e4a78524578f42ee->enter($__internal_00c508126db323992c0bda0f9ad5e00c3b956317436f3015e4a78524578f42ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_0db8a620a35c2bb03e2e9563412e178cfd169d224b474d0f63dc173324aae90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db8a620a35c2bb03e2e9563412e178cfd169d224b474d0f63dc173324aae90f->enter($__internal_0db8a620a35c2bb03e2e9563412e178cfd169d224b474d0f63dc173324aae90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_00c508126db323992c0bda0f9ad5e00c3b956317436f3015e4a78524578f42ee->leave($__internal_00c508126db323992c0bda0f9ad5e00c3b956317436f3015e4a78524578f42ee_prof);

        
        $__internal_0db8a620a35c2bb03e2e9563412e178cfd169d224b474d0f63dc173324aae90f->leave($__internal_0db8a620a35c2bb03e2e9563412e178cfd169d224b474d0f63dc173324aae90f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
