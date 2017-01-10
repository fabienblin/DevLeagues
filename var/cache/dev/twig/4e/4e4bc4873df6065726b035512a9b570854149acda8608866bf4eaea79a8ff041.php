<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_8159d33a3774dadc20955f4c7f9097901f47f62db582ada2c6740777bd4c7d2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:login-layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:login-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43966def60ccd607726f1b9b458dfb842eb1c7b8da97b48bc2b8177c0f21a636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43966def60ccd607726f1b9b458dfb842eb1c7b8da97b48bc2b8177c0f21a636->enter($__internal_43966def60ccd607726f1b9b458dfb842eb1c7b8da97b48bc2b8177c0f21a636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_4ece87eeb8bc6032a808f7594deb953442a725fee423733c8fe12fc9654b97c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ece87eeb8bc6032a808f7594deb953442a725fee423733c8fe12fc9654b97c7->enter($__internal_4ece87eeb8bc6032a808f7594deb953442a725fee423733c8fe12fc9654b97c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43966def60ccd607726f1b9b458dfb842eb1c7b8da97b48bc2b8177c0f21a636->leave($__internal_43966def60ccd607726f1b9b458dfb842eb1c7b8da97b48bc2b8177c0f21a636_prof);

        
        $__internal_4ece87eeb8bc6032a808f7594deb953442a725fee423733c8fe12fc9654b97c7->leave($__internal_4ece87eeb8bc6032a808f7594deb953442a725fee423733c8fe12fc9654b97c7_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_69411c376b52b2d23a9aee188d616fd398469046e97406b7f3916864bef9ab82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69411c376b52b2d23a9aee188d616fd398469046e97406b7f3916864bef9ab82->enter($__internal_69411c376b52b2d23a9aee188d616fd398469046e97406b7f3916864bef9ab82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_02633fba074ea14cbe0efac32247fa4da861fb786a6f60ac8774cabbaa964d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02633fba074ea14cbe0efac32247fa4da861fb786a6f60ac8774cabbaa964d0d->enter($__internal_02633fba074ea14cbe0efac32247fa4da861fb786a6f60ac8774cabbaa964d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
";
        // line 5
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<div class=\"login-box\">
  <div class=\"login-logo\">
    <a href=\"#\"><b>Dev</b>Leagues</a>
  </div>
  <!-- /.login-logo -->
  <div class=\"login-box-body\">
    <p class=\"login-box-msg\">Sign in to start your session</p>

    <form action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
      <div class=\"form-group has-feedback\">
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"Username\">
        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Password\">
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-8\">
\t\t\t<input type=\"checkbox\"  id=\"remember_me\" name=\"_remember_me\" value=\"on\" checked> Remember Me
        </div>
        <!-- /.col -->
        <div class=\"col-xs-4\">
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\"  id=\"_submit\" name=\"_submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit"), "html", null, true);
        echo "\">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class=\"social-auth-links text-center\">
      <p>- OR -</p>
      <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using
        Facebook</a>
      <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href=\"#\">I forgot my password</a><br>
    <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"text-center\">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<!-- jQuery 2.0.2 -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
<!-- Bootstrap -->
<script src=\"../../js/bootstrap.min.js\" type=\"text/javascript\"></script>

";
        
        $__internal_02633fba074ea14cbe0efac32247fa4da861fb786a6f60ac8774cabbaa964d0d->leave($__internal_02633fba074ea14cbe0efac32247fa4da861fb786a6f60ac8774cabbaa964d0d_prof);

        
        $__internal_69411c376b52b2d23a9aee188d616fd398469046e97406b7f3916864bef9ab82->leave($__internal_69411c376b52b2d23a9aee188d616fd398469046e97406b7f3916864bef9ab82_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 48,  92 => 32,  76 => 19,  71 => 17,  60 => 8,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AvanzuAdminThemeBundle:layout:login-layout.html.twig\" %}

{% block page_content %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<div class=\"login-box\">
  <div class=\"login-logo\">
    <a href=\"#\"><b>Dev</b>Leagues</a>
  </div>
  <!-- /.login-logo -->
  <div class=\"login-box-body\">
    <p class=\"login-box-msg\">Sign in to start your session</p>

    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
      <div class=\"form-group has-feedback\">
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"form-control\" placeholder=\"Username\">
        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Password\">
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-8\">
\t\t\t<input type=\"checkbox\"  id=\"remember_me\" name=\"_remember_me\" value=\"on\" checked> Remember Me
        </div>
        <!-- /.col -->
        <div class=\"col-xs-4\">
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\"  id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class=\"social-auth-links text-center\">
      <p>- OR -</p>
      <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using
        Facebook</a>
      <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href=\"#\">I forgot my password</a><br>
    <a href=\"{{ path('fos_user_registration_register') }}\" class=\"text-center\">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<!-- jQuery 2.0.2 -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
<!-- Bootstrap -->
<script src=\"../../js/bootstrap.min.js\" type=\"text/javascript\"></script>

{% endblock %}
", "@FOSUser/Security/login.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
