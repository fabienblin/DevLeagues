<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f830d013f3ef3a024e56854c2933d5928dee6305db77958215b6c6d699f597c2 extends Twig_Template
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
        $__internal_ab969562642998010105234e4ae3ea22d983991fba2907ece973e74ada2a8cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab969562642998010105234e4ae3ea22d983991fba2907ece973e74ada2a8cf8->enter($__internal_ab969562642998010105234e4ae3ea22d983991fba2907ece973e74ada2a8cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_b8be468a0d8c6af5d9113e8111c11f628a94af5f0c9c29c865d4c164a83d175c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8be468a0d8c6af5d9113e8111c11f628a94af5f0c9c29c865d4c164a83d175c->enter($__internal_b8be468a0d8c6af5d9113e8111c11f628a94af5f0c9c29c865d4c164a83d175c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ab969562642998010105234e4ae3ea22d983991fba2907ece973e74ada2a8cf8->leave($__internal_ab969562642998010105234e4ae3ea22d983991fba2907ece973e74ada2a8cf8_prof);

        
        $__internal_b8be468a0d8c6af5d9113e8111c11f628a94af5f0c9c29c865d4c164a83d175c->leave($__internal_b8be468a0d8c6af5d9113e8111c11f628a94af5f0c9c29c865d4c164a83d175c_prof);

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
", "@Framework/Form/container_attributes.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
