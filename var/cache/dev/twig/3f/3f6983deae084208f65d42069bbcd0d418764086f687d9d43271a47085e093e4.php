<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b917732f82413a8cf00b8576d336bc7e555b85ae15c1d01e668ace4d2f1d591d extends Twig_Template
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
        $__internal_affb830f80b3ebd6475a3ce9c5a3d043e702f22e5b1a1a7b7902da1880bef950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_affb830f80b3ebd6475a3ce9c5a3d043e702f22e5b1a1a7b7902da1880bef950->enter($__internal_affb830f80b3ebd6475a3ce9c5a3d043e702f22e5b1a1a7b7902da1880bef950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_cb3e9e1ebb8fbe269ca8aa30cd0b8a395dc3dc32b3d28473aa577a67b6a4885b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3e9e1ebb8fbe269ca8aa30cd0b8a395dc3dc32b3d28473aa577a67b6a4885b->enter($__internal_cb3e9e1ebb8fbe269ca8aa30cd0b8a395dc3dc32b3d28473aa577a67b6a4885b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_affb830f80b3ebd6475a3ce9c5a3d043e702f22e5b1a1a7b7902da1880bef950->leave($__internal_affb830f80b3ebd6475a3ce9c5a3d043e702f22e5b1a1a7b7902da1880bef950_prof);

        
        $__internal_cb3e9e1ebb8fbe269ca8aa30cd0b8a395dc3dc32b3d28473aa577a67b6a4885b->leave($__internal_cb3e9e1ebb8fbe269ca8aa30cd0b8a395dc3dc32b3d28473aa577a67b6a4885b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
